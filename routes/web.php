<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\Admin\Rents;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('/');
Route::view('/acar', 'layouts.adminviews.add-new-car')->name('acar');
Route::get('/car/{id}/edit', [DashboardController::class, 'EditCar'])->name('ecars');

Route::get('/car/{slug?}', [CarsController::class, 'ViewCarSinglePage'])->name('car.single');
Route::get('getform', [CarsController::class, 'getFormData'])->name('getform');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::view('/contact', 'layouts.userviews.contact')->name('contact');
Route::post('/send_message', [DashboardController::class, 'StoreMessage'])->name('message.store');

Route::view('/services', 'layouts.userviews.services')->name('services');
Route::view('/rent', 'layouts.userviews.rent')->name('rent');
Route::view('/cars', 'layouts.userviews.cars')->name('cars');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/profile', [HomeController::class, 'Profile'])->name('user.profile');
    Route::get('/cancel/{id}', [HomeController::class, 'CancelRent'])->name('rent.cancel');

    Route::group(['middleware' => 'role:admin'], function () {
        Route::post('/message/delete/{message}', [DashboardController::class, 'DeleteMessage'])->name('message.delete');
        Route::get('admin/messages', [DashboardController::class, 'ViewMessages'])->name('admin.messages');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/users', [DashboardController::class, 'viewUsers'])->name('admin.users');
        Route::get('/user/{username}/edit', [DashboardController::class, 'UpdateUser'])->name('admin.user.edit');
        Route::get('/admin/add-new-user', [DashboardController::class, 'AddNewUser'])->name('admin.new.user');

        Route::get('/brands/all', [DashboardController::class, 'viewBrands'])->name('admin.brands');
        Route::get('/brand/new', [DashboardController::class, 'AddNewBrand'])->name('admin.new.brand');
        Route::get('/brand/{id}/edit', [DashboardController::class, 'EditBrand'])->name('admin.update.brand');

        Route::get('/cars/all', [DashboardController::class, 'ViewCars'])->name('admin.cars');
        Route::get('/new/car', [DashboardController::class, 'AddNewCar'])->name('admin.new.car');

        Route::view('/sliders', 'layouts.adminviews.all_sliders')->name('admin.sliders');


        Route::get('/admin/rents', Rents::class)->name('rents');

        Route::get('/reports', [ReportController::class, 'index'])->name('reports');
        Route::get('/get_report', [ReportController::class, 'getReport'])->name('report.get');
        Route::post('/pdf/download', [ReportController::class, 'downloadPdf'])->name('report.generate');

        //        Route::get('/car/{id}/edit',[DashboardController::class,'EditCar'])->name('admin.edit-car');
    });
});

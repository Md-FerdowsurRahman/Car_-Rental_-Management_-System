<?php

namespace App\Http\Livewire\Admin;

use App\Models\Car;
use App\Models\Rent;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Rents extends Component
{
    public $cars;
    public $search = '';
    public $sortField = 'id';
    public $orderBy = 'asc';

    public function mount()
    {
    }
    public function cancelRent($id)
    {
        Rent::where('id',$id)->update([
            'rent_status'=>3,
        ]);
    }
    public function UpdatedStatus($id)
    {
        Rent::where('id', $id)->update(
            [
                'rent_status' => $this->status,
            ]
        );
    }
    protected $listeners = ['delete'];
    public function sortBy($field)
    {

        $this->sortField === $field ? ($this->orderBy = $this->orderBy === 'asc' ? 'desc' : 'asc') : $this->orderBy = 'asc';

        $this->sortField = $field;
    }
    public function changeStatus($id,$status)
    {
        if($status >=0 && $status < 2){
            $status = $status + 1;
        }elseif($status == 3){
            $status = 0;
        }
        Rent::where('id',$id)->update([
            'rent_status'=>$status,
        ]);
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'icon' => 'warning',
            'title' => 'Are you sure to delete this ? ',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        try {
            $car = Car::Where('id', $id)->firstOrFail();
            if ($car->car_photo_path) {
                Storage::delete('cars/' . $car->car_photo_path);
            }
            if ($car->car_image_single_page_view) {
                Storage::delete('cars/' . $car->car_image_single_page_view);
            }
            $car->delete();
        } catch (\Illuminate\Database\QueryException $exception) {
            $this->dispatchBrowserEvent('swal:error', [
                'icon' => 'error',
                'title' => 'This Car Has been Used as a Slider ',
                'text' => 'To delete this car ,Please Delete the slider related to this car or Please set that slider to another car',
                'timer' => 10000
            ]);
        }
    }
    public function render()
    {
        return view('livewire.admin.rents', [
            'rents' => Rent::with(['user', 'car', 'rentplace', 'returnplace'])
                ->orderBy($this->sortField, $this->orderBy)
                ->get(),
        ])
            ->extends('layouts.admin');
    }
}

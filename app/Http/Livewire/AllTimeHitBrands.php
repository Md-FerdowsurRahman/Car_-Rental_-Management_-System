<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class AllTimeHitBrands extends Component
{

    public function render()
    {
        $brandsCount  = Brand::count();
        $brands = Brand::with(['cars'])->orderBy('id', 'DESC')->take(8)->get();
        return view('livewire.all-time-hit-brands', compact('brands', 'brandsCount'));
    }
}

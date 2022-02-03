<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserProfileDetails extends Component
{
    protected $listeners = ['profile-updated'=>'render'];
    public function render()
    {
        return view('livewire.user-profile-details');
    }
}

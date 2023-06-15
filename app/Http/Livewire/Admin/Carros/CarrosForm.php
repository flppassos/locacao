<?php

namespace App\Http\Livewire\Admin\Carros;

use Livewire\Component;

class CarrosForm extends Component
{
    public function render()
    {
        return view('livewire.admin.carros.carros-form')->layout('components.admin.layouts.principal');
    }
}

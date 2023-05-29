<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Car;

class Carros extends Component
{
    /**
     * Create a new component instance.
     */
    public $carros;

    public function __construct()
    {
        $carros = Car::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.carros');
    }
}

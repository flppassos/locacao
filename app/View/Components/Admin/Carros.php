<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use App\Models\Car;

class Carros extends Component
{
    /**
     * Create a new component instance.
     */
    public Collection $carros;

    public function __construct()
    {
        $this->carros = Car::all();

        // dd($this->carros);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.carros');
    }
}

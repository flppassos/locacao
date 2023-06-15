<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Car;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Carros extends Component
{

    public Collection $carros;
    //Atributo para o campo de pesquisa na tela
    public string $pesquisa = '';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->carros = Car::all();

        // dd($this->carros);
    }

    public function filtrarDados()
    {
        if (empty($this->pesquisa)) {
            // Pesquisa retorna todos os dados
            $this->carros = Car::all();
        }
        else {
            // DB::enableQueryLog();

            $this->carros = Car::where('modelo', 'like', "%$this->pesquisa%")
                                    ->orWhere('marca', 'like', "%$this->pesquisa%")
                                    ->orWhere('placa', 'like', "%$this->pesquisa%")
                                    ->orWhere('cor', 'like', "%$this->pesquisa%")
                                    ->get();
            // dd(DB::getQueryLog());
        }
    }

    public function render()
    {
        //Chamando o método de filtro
        $this->filtrarDados();

        return view('livewire.admin.carros.carros')
            ->layout('components.admin.layouts.principal');
    }
}

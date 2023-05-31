<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public int $contador = 0;
    public string $nome;
    public $saudacao = false;
    public string $cumprimento = "Oi";


    public function incrementar()
    {
        $this->contador++;
    }

    public function decrementar()
    {
        $this->contador--;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarProductos extends Component
{
    public $nombre;
    public $precio_minimo;
    public $precio_maximo;

    protected $rules = [
        'nombre' => 'min:1|max:20',
        
    //     'nombre' => 'string',
    //     'precio_minimo' => 'integer',
    //     'precio_maximo' => 'integer',
    ];

    public function leerDatos()
    {
        $datos = $this->validate();

        $this->emit('terminosBusqueda', $this->nombre, $this->precio_minimo, $this->precio_maximo);
    }
    public function render()
    {
        return view('livewire.filtrar-productos');
    }
}

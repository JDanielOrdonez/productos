<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class MostrarProductos extends Component
{
    
    public $nombre;
    public $precio_minimo;
    public $precio_maximo;
    public $productos = [];

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'terminosBusqueda' => 'buscar'
    ];

    public function buscar($nombre, $precio_minimo, $precio_maximo)
    {
        $this->nombre = $nombre;
        $this->precio_minimo = $precio_minimo;
        $this->precio_maximo = $precio_maximo;  

    }

    public function render()
    {   

        $this->productos = Producto::when($this->nombre, function($query){
            $query->where("nombre", "LIKE", "%" . $this->nombre . "%");
        })
        ->when($this->precio_minimo && $this->precio_maximo, function($query){
            $query->whereBetween('precio', [$this->precio_minimo, $this->precio_maximo]);
        })
        ->orderBy('nombre', 'asc')
        ->get();

        return view('livewire.mostrar-productos', [
            'productos' => $this->productos
        ]);
    }
}

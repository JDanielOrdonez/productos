<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class AgregarProducto extends Component
{
    public $show = false;
    public $nombre;
    public $descripcion;
    public $precio;

    protected $rules = [
        'nombre' => 'required|min:3|max:20',
        'descripcion' => 'required|min:3|max:255',
        'precio' => 'required|numeric|min:1'
    ];

    protected $listeners = [
        'openModal'
    ];
    
    public function openModal()
    {
        $this->show = true;
    }

    public function agregarProducto()
    {
        // Validación
        $datos = $this->validate();
        
        // Guardar producto en bd
        Producto::create([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'precio' => $datos['precio'],
        ]);

        // llamar un listener
        $this->emit('refreshComponent');

        // Cerrar modal
        $this->show = false;

        // Limpiar campos
        $this->nombre = '';
        $this->descripcion = '';
        $this->precio = '';

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.agregar-producto');
    }
}

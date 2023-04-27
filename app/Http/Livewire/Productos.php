<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $productos ,$idProducto, $nombre, $cantidad, $precio, $descripcion;
    public $modal=0;
    
    
    public function render()
    {
        $this-> productos =Producto::all();
        return view('livewire.productos');
    }
    
    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal=true;
    }

    public function cerrarModal(){
        $this->modal=false;
    }

    public function limpiarCampos(){
        $this-> nombre = '';
        $this-> cantidad = '';
        $this-> precio = '';
        $this-> descripcion = '';
    }
    public function editar($id){

      $producto= Producto::findOrFail($id);
      $this->idProducto = $id;
      $this->nombre =$producto->nombre;
      $this->precio =$producto->precio;
      $this->descripcion =$producto->descripcion;
      $this->cantidad =$producto->cantidad;
      $this->abrirModal();
    }
    public function eliminar($id){
        Producto::find($id)->delete;
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar(){
        Producto::updateOrCreate(['id'=>$this->idProducto],
        [
            'nombre'=> $this->nombre,
            'precio'=> $this->precio,
            'descripcion'=> $this->descripcion,
            'cantidad'=> $this->cantidad,

        ]);
        session()->flash('message', 'Registro creado');
        $this->cerrarModal();
        $this->limpiarCampos();
    }

}

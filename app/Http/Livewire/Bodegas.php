<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bodega;
use Illuminate\Validation\Rules\Enum;

class Bodegas extends Component
{
    protected $fillable = ['nombre','pais', 'estado', 'municipio', 'colonia', 'calle', 'num_establecimiento', 'descripcion'];
    public $bodegas, $nombre, $pais, $estado, $municipio, $colonia, $calle, $num_establecimiento, $descripcion, $id_bodega ;
    public $modal = false;

    protected $rules = [
        'nombre' => 'required|min:6',
        'pais' => 'required|in:Mexico,Estados Unidos',
        'estado' => 'required',
        'municipio' => 'required',
        'colonia' => 'required',
        'calle' => 'required',
        'num_establecimiento' => 'required',
        'descripcion' => 'required'
    ];

    public function render()
    {
        $this->bodegas = Bodega::all();
        return view('livewire.bodegas');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->nombre = '';
        $this->pais = '';
        $this->estado = '';
        $this->municipio = '';
        $this->colonia = '';
        $this->calle = '';
        $this->num_establecimiento = '';
        $this->descripcion = '';
        $this->id_bodega = '';
    }

    public function editar($id)
    {
        $bodega = Bodega::findOrFail($id);
        $this->validateOnly($bodega);
        $this->id_bodega = $id;
        $this->nombre = $bodega->nombre;;
        $this->pais = $bodega->pais;
        $this->estado = $bodega->estado;
        $this->municipio = $bodega->municipio;
        $this->colonia = $bodega->colonia;
        $this->calle = $bodega->calle;
        $this->num_establecimiento = $bodega->num_establecimiento;
        $this->descripcion = $bodega->descripcion;
        $validatedData = $this->validate();
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Bodega::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        $validatedData = $this->validate();
        Bodega::updateOrCreate(['id'=>$this->id_bodega],
            [
                'nombre' => $this->nombre,
                'pais' => $this->pais,
                'estado' => $this->estado,
                'municipio' => $this->municipio,
                'colonia' => $this->colonia,
                'calle' => $this->calle,
                'num_establecimiento' => $this->num_establecimiento,
                'descripcion' => $this->descripcion
            ]);
         
         session()->flash('message',
            $this->id_bodega ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}

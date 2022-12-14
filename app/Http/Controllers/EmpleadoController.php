<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Models\area;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('empleado_index'), 403);

        $empleados = empleado::paginate(5);
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = area::all();
        return view('empleados.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|max:255',
            'descripcion' => 'required',
          ], [
           
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'Es necesaria una dirección de correo electronico.',
            'descripcion.required' => 'Es necesaria una descripcion.',
         ]);
         
          

        empleado::create($request->all()); 
       
        
        session()->flash('flash_message', 'Empleado creado correctamente!');

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        $areas = area::all();
        session()->flash('flash_message', 'Empleado actualizado correctamente!');

        return view('empleados.edit', compact('empleado','areas'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|max:255',
            'descripcion' => 'required',
          ], [
           
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'Es necesaria una dirección de correo electronico.',
            'descripcion.required' => 'Es necesaria una descripcion.',
         ]);
         
        
        $empleado->update($request->all());
        
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}

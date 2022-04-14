<?php

namespace App\Http\Controllers;
use App\Models\Barrio;
use App\Models\Ciudad;

use Illuminate\Http\Request;

class BarrioController extends Controller
{
    public function index()
    {
        $barrios = Barrio::all();

        return view('barrio.index')->with('barrios', $barrios);
    }

    public function create()
    {
        $ciudades = Ciudad::all();

        return view('barrio.crear', compact('ciudades'));
    }

    public function store(Request $request)
    {
        $barrios = new Barrio();
        $barrios->nombre = $request->get('nombre');
        $barrios->ciudades_id = $request->get('ciudad');
        $barrios->save();
        session()->flash('message', 'Registro Exitoso');
        return redirect ('/barrios');
        
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {

        $ciudades = Ciudad::all();
        

        $barrio = Barrio::find($id);
        

        return view('barrio.editar', compact('ciudades'), compact('barrio'));
    }

   
    public function update(Request $request, $id)
    {
        $barrio = Barrio::find($id);
        $barrio->nombre = $request->get('nombre');
        $barrio->save();
        session()->flash('message', 'Actualización exitosa');
        return redirect ('/barrios');
    }

  
    public function destroy($id)
    {
        $barrio = Barrio::find($id);
        $barrio->delete();
        session()->flash('message', 'Registro eliminado correctamente');
        return redirect('/barrios');

    }
    

}

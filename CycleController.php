<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cycles=Cycle::orderBy('year','DESC')->paginate(3);
        return view('Cycle.index',compact('Cycle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Cycle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciclo = new Cycle();
        $data = $this->validate($request, [
            'id'=>'required',
            'name'=>'required',
            'grade'=>'required',
            'year'=>'required',
        ]);
        // tipo de validacion para el deleted
        // aquí he borrado la línea de arriba que estaba duplicada
        Cycle::create($request->all());
        return redirect()->route('Cycle.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Cycle=Cycle::find($id);
        return  view('Cycle.show',compact('Cycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cycle=Cycle::find($id);
        return view('Cycle.edit',compact('Cycles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['id'=>'required', 'name'=>'required', 'grade'=>'required', 'year'=>'required']);
        Cycles::update($request->all());
        return redirect()->route('Cycle.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciclo = Cycle::find($id); //primero hago variable de ese ciclo que busco que es el que voy a eliminar
        // luego establezco el valor nuevo
        $ciclo->deleted = 1;
        //luego actualizo el registro
        $ciclo->update();

        return redirect()->route('Cycle.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cycles=Cycle::latest()->paginate(10);
        return view('Cycle.index',compact('Cycles'));
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
        $cycle = new Cycle();
        $data = $this->validate($request, [
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
        return view('Cycle.edit',compact('Cycle'));
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
        $this->validate($request,[ 'grade'=>'required', 'name'=>'required', 'year'=>'required']);
        Cycle::where('id', $id)->update($request->except('_token','_method'));
        return redirect()->route('Cycle.index')->with('success','Registro modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciclo = Cycle::find($id); 
        $ciclo->deleted = true;
        $ciclo->update();
        return redirect()->route('Cycle.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

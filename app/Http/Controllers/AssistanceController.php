<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assistance;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistances = Assistance::latest()->paginate(10);
        return view('Assistance.index', compact('assistances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Assistance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'student_id'=>'required',
            'date'=>'required',
            'assistance'=>'required',
            ]);
        Assistance::create($request->all());
        return redirect()->route('Assistance.index')->with('success','Asistencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Assistance::find($id)->update(['accepted'=>true]);
        return redirect()->route('Assistance.index')->with('success','Registro confirmado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assistances = Assistance::find($id);
        return view('Assistance.edit',compact('assistances'));
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
        request()->validate([
            'student_id'=>'required',
            'date'=>'required',
            'assistance'=>'required',
            ]);
        Assistance::where('id', $id)->update($request->except('_token','_method'));
        return redirect()->route('Assistance.index')->with('success','Asistencia creada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assistance::find($id)->delete();
        return redirect()->route('Assistance.index')->with('success','Registro eliminado correctamente.');
    }
    
    public function aceptar($id) {
        Assistance::find($id)->update(['accepted'=>true]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tracing;

class TracingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracings = Tracing::latest()->paginate(10);
        return view('Tracing.index', compact('tracings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tracing.create');
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
            'id'=>'required',
            'type'=>'required',
            'reason'=>'required',
            'observation'=>'required',
            'tutor_c_id'=>'required',
            'deleted'=>'required'
            ]);
        Tracing::create($request->all());
        return redirect()->route('Tracing.index')->with('success','Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tracings = Tracing::find($id);
        return view('Tracing.show', compact('tracings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tracings = Tracing::find($id);
        return view('Tracing.edit',compact('tracings'));
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
            'id'=>'required',
            'type'=>'required',
            'reason'=>'required',
            'observation'=>'required',
            'tutor_c_id'=>'required',
            'deleted'=>'required'
            ]);
        //Enterprise::find($id)->update($request->all());
        Tracing::create($request->all());
        return redirect()->route('Tracing.index')->with('success','Registro creado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tracing::find($id)->delete();
        return redirect()->route('Tracing.index')->with('success','Registro eliminado correctamente.');
    }
}

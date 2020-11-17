<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ra;

class RaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ras=Ra::latest()->paginate(10);
        return view('Ra.index',compact('Ras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Ra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ra = new Ra();
        $this->validate($request,[ 
            'number' => 'required', 
            'description' => 'required', 
            'module_id' => 'required',
            
        ]);
        Ra::create($request->all());
        return redirect()->route('Ra.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ra=Ra::find($id);
        return view('Ra.show',compact('Ra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ra=Ra::find($id);
        return view('Ra.edit',compact('Ra'));
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
        $this->validate($request,[ 
            'number' => 'required', 
            'description' => 'required', 
            'module_id' => 'required',
        ]);
        Ra::where('id', $id)->update($request->except('_token','_method'));
        return redirect()->route('Ra.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ra = Ra::find($id); 
        $Ra->deleted = true;
        $Ra->update();

        return redirect()->route('Ra.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

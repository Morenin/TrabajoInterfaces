<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enterprise;

class EnterpriseController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::latest()->paginate(10);
        return view('Enterprise.index', compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Enterprise.create');
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
            'name'=>'required',
            'email'=>'required',
            ]);
        Enterprise::create($request->all());
        return redirect()->route('Enterprise.index')->with('success','Empresa creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enterprises = Enterprise::find($id);
        return view('Enterprises.show', compact('enterprises'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enterprises = Enterprise::find($id);
        return view('Enterprise.edit',compact('enterprises'));
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
            'name'=>'required',
            'email'=>'required',
            ]);
        //Enterprise::find($id)->update($request->all());
        Enterprise::where('id', $id)->update($request->except('_token','_method'));
        return redirect()->route('Enterprise.index')->with('success','Empresa actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Enterprise::find($id)->delete();
        return redirect()->route('Enterprise.index')->with('success','Registro eliminado correctamente.');
    }
}

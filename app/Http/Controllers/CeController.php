<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ce;

class CeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ces=Ce::latest()->paginate(10);
        return view('Ce.index',compact('Ces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Ce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ce = new Ce();
        $this->validate($request,[ 
            'word' => 'required',
            'description' => 'required',
            'ra_id' => 'required',
            'task_id' => 'required',
            'mark' => 'required',
        ]);
        Ce::create($request->all());
        return redirect()->route('Ce.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ce=Ce::find($id);
        return  view('Ce.show',compact('Ce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ce=Ce::find($id);
        return view('Ce.edit',compact('Ce'));
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
            'word' => 'required',
            'description' => 'required',
            'ra_id' => 'required',
            'task_id' => 'required',
            'mark' => 'required',
        ]);
        Ce::where('id', $id)->update($request->except('_token','_method'));
        return redirect()->route('Ce.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ce = Ce::find($id); 
        $Ce->deleted = 1;
        $Ce->update();

        return redirect()->route('Ce.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

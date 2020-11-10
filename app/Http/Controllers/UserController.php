<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Users = User::latest()->paginate(10);
        return view('User.index',compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrar='si';
        return view('User.create',compact('entrar'));
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
            'name' => 'required', 
            'firstname' => 'required', 
            'phone' => 'required',
            'password' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('User.index')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Users=User::find($id);
        return view('User.show',compatc('Users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $entrar='no';
        $User=user::find($id);
        return view('User.edit',compact('User'),compact('entrar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
        request()->validate([
            'name' => 'required', 
            'firstname' => 'required', 
            'phone' => 'required',
            'email' => 'required',
            'type' => 'required',
            
        ]);
        User::create($request->all());
        return redirect()->route('User.index')->with('success','Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('User.index')->with('success','Usuario eliminado correctamente');
    }
}

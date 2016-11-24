<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests;


use App\User;
use Redirect;
use Session;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index()
    {
        // return 'hola';
        // $luser=\App\User::All();  colocando el modelo:use App\User;
        // $luser=User::All();
        $luser=User::paginate(3);
        return view('usuario.index',compact('luser'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
      /*  User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            // 'password'=>bcrypt($request['password']),
            'password'=>$request['password'],  //setPasswordAttribute
        ]);*/
         User::create($request->all());
        // return 'usuario registrado';
        return redirect('/usuario')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit',['euser'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
         $user = User::find($id); //guardamos el id del usuario en la variable user
         $user->fill($request->all());
         $user->save();
         
         Session::flash('message','Usuario editado correctamente');
         return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}

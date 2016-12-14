<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;



use Session;
use Redirect;


use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['create','edit']]);

    }

    public function index(Request $request)
    {
        //
         $usuarios=User::paginate(3);
         if($request->ajax()){
            return response()->json(view('usuario.users',compact('usuarios'))->render());

         }
        return view('usuario.index',compact('usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            ]);

        Session::flash('clase','alert-success');


       return redirect('/usuario')->with('message','Usuario Registrado');
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
        //
         $user = User::find($id);

        return view('usuario.edit',['user'=>$user]);
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
        //

        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        
        Session::flash('clase','alert-success');
        Session::flash('message', 'Usuario Actualizado Correctamente');

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
        //
        $user=User::find($id);
        $user->delete();
        
        Session::flash('clase','alert-danger');
        Session::flash('message','Usuario Eliminado Correctamente');

        return Redirect::to('/usuario');
    }
}

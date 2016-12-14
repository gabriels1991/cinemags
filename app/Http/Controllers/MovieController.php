<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

use App\Movie;

use Session;
use Redirect;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  



    public function index()
    {
        $movies=Movie::Movies();

        return view('pelicula.index',compact('movies'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $genres = Genre::pluck('genre', 'id');
        return view('pelicula.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create($request->all());
        return "Listo";
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
        $movie = Movie::find($id);
        $genres = Genre::pluck('genre', 'id');
        return view('pelicula.edit',['movie'=>$movie,'genres'=>$genres]);
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
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        Session::flash('clase','alert-success');
        Session::flash('message', 'Usuario Actualizado Correctamente');

        return Redirect::to('/movie');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        Session::flash('clase','alert-danger');
        Session::flash('message','Movie Eliminado Correctamente');
        return Redirect::to('/movie');
    }
}

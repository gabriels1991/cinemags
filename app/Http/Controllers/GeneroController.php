<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GeneroRequest;

use App\Genre;

class GeneroController extends Controller
{

    public function listing(){
        $genres = Genre::all();
        return $genres;
    }
    
    public function index()
    {
        return view('genero.index');
       
    }

   
    public function create()
    {
       return view('genero.create');
    }

   
    public function store(GeneroRequest $request)
    {
        if($request->ajax()){
            Genre::create($request->all());
            return response()->json([
                "mensaje"=> 'creado'
                ]);

        }
        
    }

    
    public function show($id)
    {
        
        
    }

    
    public function edit($id)
    {
        $genre = Genre::find($id);

        return $genre;
        
    }

    
    public function update(GeneroRequest $request, $id)
    {
        $genre= Genre::find($id);
        $genre->fill($request->all());
        $genre->save();

        return response()->json([
            "mensaje" => "listo"
            ]);
        
    }

    
    public function destroy($id)
    {
       
        $genre=Genre::find($id);
        $genre->delete();
        return response()->json([
            "mensaje" => "listo"
            ]);
        
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Movie extends Model
{
    

    protected $table = "movies";
    protected $fillable = ['name','path','cast','direction','duration','genre_id'];

    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}

	public static function Movies(){
		return DB::table('movies')
		->join('genres','genres.id','=','movies.genre_id')
		->select('movies.*', 'genres.genre')
		->get();

	}
}

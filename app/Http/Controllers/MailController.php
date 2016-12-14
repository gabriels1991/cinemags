<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use Session;


class MailController extends Controller
{

	public function index(){

	}




    public function store(Request $request){

        
    	
    	Mail::send('mails.mail',$request->all(), function($msj){
    		$msj->subject('Correo de Contacto');
    		$msj->to('gabriels191291@gmail.com');
    	});

    	Session::flash('mensaje','Mensaje enviado correctmente');
    	return Redirect::to('contacto');

    }
}

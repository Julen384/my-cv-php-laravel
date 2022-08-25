<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function create () {

        return view ('contacts.create');
    }


public function store(Request $request){
    //enviamos el mail de contacto
    if($request->email == ""){

        return back()->with('error','Debes introducir tu dirección de correo electrónico.');

    }elseif($request->message ==""){

        return back()->with('error','Debes rellenar el contenido del mensaje.');

    }else{

        Mail::to('julennielfa@gmail.com')->send(new ContactNotification($request->email,$request->message));

        return back()->with('success','Hemos recibido su mensaje, en breve nos pondremos en contacto con usted.');
    }
}

}

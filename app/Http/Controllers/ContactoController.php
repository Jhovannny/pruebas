<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CotactoMail;
use Illuminate\Support\Facades\Mail;
class ContactoController extends Controller
{
    public function index(){

        return view('contacto.index');

    }

    public function store(Request $request){

        $request->validate([
     'name'=>'required',
     'correo'=>'required',
     'mensaje'=>'required'

        ]);
        $correo=new CotactoMail($request->all());

       
Mail::to('al21809@gmail.com')->send($correo);
return redirect()->route('contacto.index')->with('info','Mendaje enviado con exito');
    }
}

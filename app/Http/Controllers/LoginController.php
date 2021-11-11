<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
        public function login(){
        return view('login');
    }

    public function MuestraLogin(Request $request){
        $user=$request->input('inuser');
        $password=$request->input('inpass');
        if($user=='ImNayeon' and $password=='Caldodepollo123'){
            $mensaje='Sesión Iniciada :)';
        }else if($user!='ImNayeon'){
            $mensaje='Tu USUARIO esta mal escrito por favor escribe correctamente';
        }else{
            $mensaje='Tu CONTRASEÑA esta mal escrita por favor escribe correctamente';
        }
        //dd($request);
        return view('showLogin',['msg'=>$mensaje]);
    }
}
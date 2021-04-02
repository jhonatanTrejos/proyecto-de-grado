<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function usuario(){
    return view('usuario.nuevo');
}

    public function certificado(){
    return view('usuario.certificado');
}

}

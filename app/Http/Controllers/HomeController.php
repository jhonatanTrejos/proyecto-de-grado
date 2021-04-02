<?php

namespace App\Http\Controllers;
use App\Models\Registro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    {
       $this->middleware('auth');
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //controladores para certificados usuarios normales
    public function inicio(){
        return view('certificados.index');
    }
    public function registro(Request $request){
        $buscarReg=trim($request->get('buscarReg'));
        $registros=DB::table('registros')->get()
                                        ->where('numero_cedula','like',$buscarReg);
                                        //->orWhereR('nombre_empleado','LIKE','%',$findReg,'%')
                                        //->orderBy('id','asc')
                                        //->paginate(10);
                                       // ;

       //esto busca todos los registros                                
    //$registros=Registro::paginate(5);
    return view('certificados.consultaRegistros',compact('registros'));
    //esto me devuelve la vista vacia
       // return view('certificados.consultaRegistros');
    }
    public function nuevo(){
        return view('certificados.nuevo');
    }
    public function certificado(){
        return view('certificados.certificado');
    }
    public function solicitud(){
        return view('certificados.solicitud');
    }

}

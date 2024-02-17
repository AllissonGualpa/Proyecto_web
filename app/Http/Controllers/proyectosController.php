<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class proyectosController extends Controller
{
    public function index()
    {
        //$proyectos = BD::table('proyectos') ->get();
        //return view('pagina', ['proyectos' => $proyectos]);

        //llamas a este metodo index y se muestra esta pantalla
        return view('proyecto.index');
    }

    public function create()
    { 
        //si llamas al metodo create crearas esta pantalla
        return view('proyecto.create');
    }
}

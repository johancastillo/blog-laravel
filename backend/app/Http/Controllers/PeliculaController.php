<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    
    public function index($pagina = 1){
        $title = "Listado de mis peliculas";

        return view('pelicula.index', [
            'title' => $title
        ]);
    }

    public function singleMovie(){
        return view('pelicula.single');
    }

}

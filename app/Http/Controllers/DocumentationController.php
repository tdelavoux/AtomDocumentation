<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DocumentationController extends Controller
{
    public function index(){
        return view('Documentation.content.informations.informations');
    }

    public function components($parent, $template){
        if(view()->exists('Documentation.content.' .  $parent . '.' . $template)){
            return view('Documentation.content.' .  $parent . '.' . $template);
        }
        abort(404);
    }
    
}
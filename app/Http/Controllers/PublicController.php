<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        return view("welcome");
    }
    
    public function progetti(){
        return view("progetti");
    }
    
    public function contatti(){
        return view("contatti");
    }
    
    public function chiSiamo(){
        return view("chi-siamo");
    }
}

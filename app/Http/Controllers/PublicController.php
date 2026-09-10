<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        return view("welcome");
    }
    
    public function blog(){
        return view("blog");
    }
    
    public function contatti(){
        return view("contatti");
    }
    
    public function chiSiamo(){
        return view("chi-siamo");
    }
    public function contattiSubmit(Request $request){
        // 1. Valida i dati del form
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Torna indietro alla pagina dei contatti con un messaggio di successo
        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
} 
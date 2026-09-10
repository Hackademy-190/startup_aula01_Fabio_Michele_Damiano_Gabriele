<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

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
    public function contattiSubmit(Request $request) 
    {
    // 1. Recupera i dati inviati dal form
    $nome = $request->input('name'); // controlla che l'input nel form abbia name="name"
    $messaggio = $request->input('message'); // controlla che l'input abbia name="message"

    // 2. Invia la mail usando Mail::raw (invia testo puro senza bisogno di creare classi Mailable)
    Mail::to("")->send(new \Illuminate\Mail\Message(function ($message) use ($nome, $messaggio) {
        $message->to('test@example.com')
                ->subject('Nuovo Contatto dal Sito')
                ->body("Nuovo messaggio da: $nome. Testo: $messaggio");
    }));

    return "Email inviata con successo! Controlla Mailtrap.";
    }
}
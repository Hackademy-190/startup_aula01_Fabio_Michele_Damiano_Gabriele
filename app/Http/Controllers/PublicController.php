<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function blog()
    {
        return view('blog', ['posts' => $this->posts()]);
    }

    public function blogShow($id)
    {
        $post = collect($this->posts())->firstWhere('id', $id);

        return view('blog-show', compact('post'));
    }

    private function posts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor 1',
                'date' => '10 settembre 2026',
                'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
            [
                'id' => 2,
                'title' => 'Lorem ipsum dolor 2',
                'date' => '3 settembre 2026',
                'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
            [
                'id' => 3,
                'title' => 'Lorem ipsum dolor 3',
                'date' => '27 agosto 2026',
                'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
        ];
    }
<<<<<<< HEAD
    public function contattiSubmit(Request $request) 
    {
    // 1. Recupera i dati inviati dal form
    $nome = $request->input('name'); // controlla che l'input nel form abbia name="name"
    $messaggio = $request->input('message'); // controlla che l'input abbia name="message"
=======

    public function chiSiamo()
    {

        $team = [
            [
                'id' => 1,
                'nome' => 'Michele Giovanni Noviello',
                'ruolo' => 'CEO',
                'descrizione' => 'Michele è il fondatore e CEO della nostra azienda. Con oltre 20 anni di esperienza nel settore, guida il team con passione e dedizione.',
                'immagine' => 'media/michele.jpg',
            ],
            [
                'id' => 2,
                'nome' => 'Fabio Spanò',
                'ruolo' => 'Operations Manager',
                'descrizione' => "Fabio è il nostro Operations Manager. È responsabile della gestione operativa e dell'efficienza dei processi aziendali.",
                'immagine' => 'media/fabio.jpg',
            ],
            [
                'id' => 3,
                'nome' => 'Damiano Ricci',
                'ruolo' => 'Ingegnere del Software',
                'descrizione' => "Damiano è l'ingegnere del software della nostra azienda. Si occupa dello sviluppo e della manutenzione delle nostre applicazioni.",
                'immagine' => 'media/damiano.jpg',
            ],
            [
                'id' => 4,
                'nome' => 'Gabriele Nunnari',
                'ruolo' => 'Art Director',
                'descrizione' => 'Gabriele gestisce le strategie di marketing e comunicazione, assicurando che il nostro messaggio raggiunga il pubblico giusto.',
                'immagine' => 'media/gabriele.jpg',
            ],
        ];

        return view('chi-siamo', ['team' => $team]);
    }

    public function chiSiamoShow($id)
    {

        $team = [
            [
                'id' => 1,
                'nome' => 'Michele Giovanni Noviello',
                'ruolo' => 'CEO',
                'descrizione' => 'Michele è il fondatore e CEO della nostra azienda. Con oltre 20 anni di esperienza nel settore, guida il team con passione e dedizione.',
                'immagine' => 'media/michele.jpg',
            ],
            [
                'id' => 2,
                'nome' => 'Fabio Spanò',
                'ruolo' => 'Operations Manager',
                'descrizione' => "Fabio è il nostro Operations Manager. È responsabile della gestione operativa e dell'efficienza dei processi aziendali.",
                'immagine' => 'media/fabio.jpg',
            ],
            [
                'id' => 3,
                'nome' => 'Damiano Ricci',
                'ruolo' => 'Ingegnere del Software',
                'descrizione' => "Damiano è l'ingegnere del software della nostra azienda. Si occupa dello sviluppo e della manutenzione delle nostre applicazioni.",
                'immagine' => 'media/damiano.jpg',
            ],
            [
                'id' => 4,
                'nome' => 'Gabriele Nunnari',
                'ruolo' => 'Art Director',
                'descrizione' => 'Gabriele gestisce le strategie di marketing e comunicazione, assicurando che il nostro messaggio raggiunga il pubblico giusto.',
                'immagine' => 'media/gabriele.jpg',
            ],
        ];

        foreach ($team as $member) {
            if ($id == $member['id']) {

                return view('chi-siamo-show', ['member' => $member]);
            }
        }

        return view('chi-siamo-show', ['team' => $team]);
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function contattiSubmit(Request $request)
    {
        // 1. Valida i dati del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
>>>>>>> 3a1bab4e79a0b2b6a802019c8d23f206a69935e6

    // 2. Invia la mail usando Mail::raw (invia testo puro senza bisogno di creare classi Mailable)
    Mail::to("")->send(new \Illuminate\Mail\Message(function ($message) use ($nome, $messaggio) {
        $message->to('test@example.com')
                ->subject('Nuovo Contatto dal Sito')
                ->body("Nuovo messaggio da: $nome. Testo: $messaggio");
    }));

    return "Email inviata con successo! Controlla Mailtrap.";
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3a1bab4e79a0b2b6a802019c8d23f206a69935e6

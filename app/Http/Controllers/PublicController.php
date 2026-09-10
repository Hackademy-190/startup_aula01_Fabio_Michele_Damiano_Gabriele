<?php

namespace App\Http\Controllers;

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

    public function contatti()
    {
        return view('contatti');
    }

    public function chiSiamo()
    {
        return view('chi-siamo');
    }

    public function contattiSubmit(Request $request)
    {
        // 1. Valida i dati del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Torna indietro alla pagina dei contatti con un messaggio di successo
        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
}

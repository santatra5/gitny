<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RendezVousController extends Controller
{
    public function index()
    {
        return view('rendezvous');
    }

    public function store(Request $request)
    {
        // Valider le formulaire
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        // Envoyer les données au serveur
        $client = new Client();
        $client->post('http://example.com/api/rendezvous', [
            'form_params' => [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => $request->date,
                'time' => $request->time,
            ]
        ]);

        // Rediriger vers la vue de confirmation
        return redirect()->route('rendezvous.confirmation');
    }

    public function confirmation()
    {
        return view('rendezvous.confirmation');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class ClientCreateController extends Controller
{
    public function index()
        {
            return view('/clients/create');
        }
        public function create()
        {
            return view('/clients/create');
        }

        public function store(Request $request)
        {
            $ticket = new Ticket;
            $ticket->intitule = $request->intitule;
            $ticket->objet = $request->objet;
            $ticket->save();

            return view('/clients/create')->with('Ticket créé avec succés.');
        }
}

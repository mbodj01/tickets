<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use DB;

class ClientReadeController extends Controller
{
    public function index()
        {
            $ticket = DB::table('tickets')->pluck('intitule');
            foreach ($ticket as $tickets) {
        }
        return view('/clients/reade', compact('ticket'));
        }
}

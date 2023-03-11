<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportTraitementController extends Controller
{
    public function index()
        {
            // Perform any actions here

            return view('/support/traitement');
        }
}

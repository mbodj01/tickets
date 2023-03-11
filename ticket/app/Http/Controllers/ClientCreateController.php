<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCreateController extends Controller
{
    public function index()
        {
            return view('/clients/create');
        }
}

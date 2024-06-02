<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function suscriptores()
    {
        return view('clients.suscriptores');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
         return view('cliente.index');
    }
    public function empresa()
    {
         return view('cliente.empresa');
    }
    public function proyecto()
    {
         return view('cliente.proyectos');
    }
}

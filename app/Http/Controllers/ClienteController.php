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
     public function producto()
     {
          return view('cliente.productos');
     }
     public function galeria()
     {
          return view('cliente.galeria');
     }
}

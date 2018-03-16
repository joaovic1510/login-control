<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usuario extends Controller
{
  public function index()
  {
    return view('painel.perfil');
  }
  public function usuario()
  {
    return view('painel.usuario');
  }
}

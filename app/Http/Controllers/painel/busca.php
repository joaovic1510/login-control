<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class busca extends Controller
{
  public function index()
  {
    return view('painel.busca');
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome)
    {
        return view('teste.index', ['nome'=>$nome]);
    }

    public function notas($nome)
    {
        return view('teste.notas', ['nome' => $nome]);
    }

}

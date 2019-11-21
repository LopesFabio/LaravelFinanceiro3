<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banco;

class PainelController extends Controller
{
    public function index(){

        $bancos = Banco::get();
        $total = count($bancos);

        return view('painel.index', compact('total'));
    }
}

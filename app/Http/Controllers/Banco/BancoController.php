<?php

namespace App\Http\Controllers\Banco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BancoController extends Controller
{

    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function index(){

    }

    public function cadastroBanco(){
       return view('Banco.CadBanco');
    }

    public function VerBancos(){
        return view('banco.verBancos');
    }
}

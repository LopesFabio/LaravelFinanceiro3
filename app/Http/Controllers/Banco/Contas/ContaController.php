<?php

namespace App\Http\Controllers\Banco\Contas;

use App\Models\Banco;
use App\Models\Conta;
use App\Models\TipoConta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Conta\ContaRequest;
use Illuminate\Support\Facades\DB;

class ContaController extends Controller
{
    private $contas;
    private $banco;
    private $tipo;

    public function __construct(TipoConta $tipo, Conta $contas, Banco $banco)
    {
        $this->tipo = $tipo;
        $this->contas = $contas;
        $this->banco = $banco;
    }

    public function index()
    {
        $conta = $this->contas->all();
        return view('contas.verContas', compact( 'conta'));
    }

    public function create()
    {
        $botao = 'Adcionar';
        $banco = Banco::get();
        $tipo = TipoConta::get();
        return view('contas.cadastroContas', compact('banco', 'botao', 'tipo'));
    }

    public function store(ContaRequest $request)
    {
        $dataForm = $request->all();
        echo "$request->tipo";

        $store = DB::table('contas')->insert([
            'banco_id' => $request->banco,
            'tipo_id' => $request->tipo,
            'conta' => $request->conta,
            'descricao' => $request->descricao,
            'saldo'=> 0
        ]);

        if($store['success'])
            return redirect()->route('contas.verContas')->with('success', $store['message']);
        else
            return redirect()->back()->with('errors', $store['message']);
    }

    public function show($id)
    {
        $conta = Conta::where('id', $id)->get()->first();


        $banco = $conta->banco;
        $tipo = $conta->tipo;

        return view('contas.DetalhesContas', compact('conta', 'banco', 'tipo'));
    }

    public function edit($id)
    {
        $conta = $this->contas->find($id);
        $banco = $conta->banco;
        $tipo = $conta->tipo;
        $botao = 'Editar';

        $tbancos = Banco::get();
        $ttipos = TipoConta::get();


        return view('contas.EditarContas', compact('conta', 'banco', 'tipo', 'tbancos', 'ttipos', 'botao'));
    }

    public function update(ContaRequest $request, $id)
    {
        $request->all();
        $conta = $this->contas->find($id);
        $conta->banco_id = $request->banco;
        $conta->tipo_id = $request->tipo;
        $conta->conta = $request->conta;
        $conta->saldo =+ 0;
        $conta->save();

        if($conta['success'])
            return redirect()->back()->with('success', $conta['message']);
        else
            return redirect()->back()->with('errors', $conta['message']);
    }

    public function destroy($id)
    {
        $conta = $this->contas->find($id);

        $conta->delete();
    }

    public function teste()
    {
        //$banco = Banco::where('id', 1)->get()->first();
        $conta = Conta::where('id', 14)->get()->first();
        echo "$conta->conta<br>";

        $tipo = $conta->tipo;
        $banco = $conta->banco;
        echo "$banco->banco<br>$tipo->tipo";
        /*$contas = $banco->contas;

        foreach ($contas as $conta){
            echo "$conta->conta<br>";
        }*/
    }
}

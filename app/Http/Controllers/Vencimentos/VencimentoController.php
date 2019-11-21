<?php

namespace App\Http\Controllers\Vencimentos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Conta;
use App\Models\Lancamento;
use Illuminate\Support\Facades\DB;

class VencimentoController extends Controller
{
    public function historico()
    {
        $lancamento = Lancamento::get();
        return view('vencimentos.historicoLancamentos', compact('lancamento'));
    }

    public function receber()
    {
        return view('vencimentos.lancamentosReceber');
    }

    public function pagar()
    {
        return view('vencimentos.lancamentosPagar');
    }

    public function lancar()
    {
        $contas = Conta::get();
        return view('vencimentos.fazerLancamento', compact('contas'));
    }

    public function lanceInsert(Request $request)
    {
        $dataForm = $request->all();
        //dd($request);
        echo "Descrição: $request->descricao<br>";
        echo "Tipo: $request->tipolance<br>";
        echo "Vencimento: $request->vencimento<br>";
        echo "Valor: $request->valor<br>";
        echo "Conta: $request->conta<br>";
        echo "Status: $request->status<br>";

        $store = DB::table('lancamentos')->insert([
            'descricao' => $request->descricao,
            'tipo' => $request->tipolance,
            'vencimento' => $request->vencimento,
            'valor' => $request->valor,
            'status'=> $request->status,
            'conta_id' => $request->conta
        ]);
    }
}

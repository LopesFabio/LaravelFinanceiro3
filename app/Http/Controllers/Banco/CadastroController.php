<?php
/*
 * Controller do CRUD
 */

namespace App\Http\Controllers\Banco;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banco;
use App\Http\Requests\Banco\BancoFormRequest;
use App\Models\Contas;

class CadastroController extends Controller
{
    private $banco;


    public function __construct(Banco $banco)
    {
        $this->banco = $banco;
    }

    public function index()
    {
        $banks = $this->banco->paginate(10);

        //Mostrar todos os Bancos cadastrados
        return view('banco.VerBancos', compact('banks'));
    }


    public function create()
    {
        $title = 'Cadastro de Bancos';
        $botao = 'Cadastrar';

        return view ('banco.cadBanco', compact('title', 'botao'));
    }


    public function store(BancoFormRequest $request)
    {
        $dataForm = $request->all();

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        $insert = $this->banco->create($dataForm);

        if($insert['success'])
            return redirect()->route('banco.index')->with('success', $insert['message']);
        else
            return redirect()->back()->with('errors', $insert['message']);
    }


    public function show($id)
    {
        $banco = $this->banco->find($id);

        return view('banco.mostrar', compact('banco'));
    }


    public function edit($id)
    {
        $banco = $this->banco->find($id);

        $title = 'Editar Produto';
        $botao = 'Editar';
        $tipo = ['Corrente', 'Poupança', 'Universitaria', 'Salário'];

        return view ('banco.cadBanco', compact('title', 'botao', 'banco', 'tipo'));
    }


    public function update(BancoFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $conta = $this->banco->find($id);

        $update = $conta->update($dataForm);

        if($update['success'])
            return redirect()->route('banco.index')->with('success', $update['message']);
        else
            return redirect()->back()->with(['errors' => $update['message']]);
    }


    public function destroy($id)
    {
        $banco = $this->banco->find($id);

        $banco = $banco->delete();

        if ($banco['success'])
            return redirect()->route('banco.index')->with('success', $banco['message']);
        else
            return redirect()->back()->with(['errors' => $banco['message']]);
    }



}

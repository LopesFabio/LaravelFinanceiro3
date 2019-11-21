<?php

namespace App\Http\Controllers\Banco\Contas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipoConta;

class Tipo_ContaController extends Controller
{
    private $tipoconta;

    public function __construct(TipoConta $tipoconta)
    {
        $this->tipoconta = $tipoconta;
    }

    public function index()
    {
        $tipos = TipoConta::get();
        return view('contas.Tipoconta', compact('tipos'));
    }

    public function store(Request $request){
        $dataForm = $request->all();

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        $insert = $this->tipoconta->create($dataForm);

        if($insert['success'])
            return redirect()->route('todas.contas')->with('success', $insert['message']);
        else
            return redirect()->back()->with('errors', $insert['message']);
    }

    public function show()
    {
        $tipos = TipoConta::get();
        return view('contas.deleteTipo', compact('tipos'));
    }

    public function destroy($id)
    {
        $tipo = $this->tipoconta->find($id)->delete();

        if($tipo['success'])
            return redirect()->route('tipocontas')->with('success', $tipo['message']);
        else
            return redirect()->back()->with('errors', $tipo['message']);
    }
}

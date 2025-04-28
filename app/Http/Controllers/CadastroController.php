<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PessoaModel;

class CadastroController extends Controller
{
    //
    public function index()
    {
        return view('cadastro');
    }

    public function save(Request $request)
    {
        PessoaModel::create($request->all());

        $data = ['sucesso' => true];

        return view('cadastro')->with($data);
    }

}

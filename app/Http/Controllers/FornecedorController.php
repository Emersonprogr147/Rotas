<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index(){ 

    $fornecedores = [ 
        0 => ['nome' => 'fornecedor 1', 'status' => 'Ativo', 'Cidade' => 'Criciuma',
        "Produto" => 'Software ERP', 'CNPJ' => '05.008.0001/01']
    ];
  


   return view('app.fornecedor.index', compact('fornecedores'));

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index(){ 
    $fornecedores =[ 
        0 => ['nome' => 'fornecedor 1', 'status' => 'Inativo', 'Cidade' => 'Criciuma',
        "Produto" => 'Software ERP']
    ];
    $fornecedores2 =[ 
        1 => ['nome' => 'fornecedor 2', 'status' => 'Ativo', 'Cidade' => 'Criciuma',
        "Produto" => 'Mouse, teclados, Monitores']
    ];

   return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2'));

  }
}

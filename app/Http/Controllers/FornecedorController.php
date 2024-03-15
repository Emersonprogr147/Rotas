<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index(){ 

    $fornecedores = [ 
        1 => ['nome' => 'fornecedor 1', 'status' => 'Ativo', 'Cidade' => 'Criciúma',
        "Produto" => 'Software ERP', 'CNPJ' => '']
    ];
  
    $fornecedores2= [ 
      2 => ['nome' => 'fornecedor 2', 'status' => 'Inativo', 'Cidade' => 'Criciúma',
      "Produto" => 'Mouse , Teclado e Eletrõnicos ', 'CNPJ' => '']
  ];

     echo isset($fornecedores2[1])  ? ' CNPJ informado' : ' CNPJ  não informado' ; 


   return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2'));

  }
}

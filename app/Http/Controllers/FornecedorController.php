<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index(){ 

    $fornecedores = [ 
        0 => ['nome' => 'fornecedor 1', 'status' => 'Ativo', 'Cidade' => 'Criciúma',
        "Produto" => 'Software ERP', 'CNPJ' => '025.659.892-29'],
   

    1 => [ 'nome' => ' fornecedor 2' , 'status' => ' Inativo', 'Cidade' => 'Joinville', 'Produto'=> 'Aparelhos para Informática',
   ]
    ];
  


     echo  isset($fornecedores [0] ['CNPJ']) ? 'CNPJ Informado' :  'CNPJ  não informado' ; 

   return view('app.fornecedor.index', compact('fornecedores'));

  }
}

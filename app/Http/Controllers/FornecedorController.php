<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index(){ 

    $fornecedores = [ 
        0 => ['nome' => 'fornecedor 1', 'status' => 'Ativo', 'Cidade' => 'Criciúma',
        "Produto" => 'Software ERP', 'CNPJ' => '025.659.892-29',  'ddd'=> ' 32', 'Telefone'=> '96789547'],
   

    1 => [ 'nome' => ' fornecedor 2' , 'status' => ' Inativo', 'Cidade' => 'Joinville', 'Produto'=> 'Aparelhos para Informática',
   'CNPJ' => null, 'ddd' => '48', 'Telefone'=> '48996324295']
    ];
  


     echo  isset($fornecedores [1] ['CNPJ']) ? 'CNPJ Informado' :  'CNPJ  não informado' ; 

   return view('app.fornecedor.index', compact('fornecedores'));

  }
}

<h3>Fornecedor</h3>
 

@php 
 /*
 if(isset($variavel)) {} // retornar  true se a variável estiver definida existência 
 if(empty($variavel)) {} // retornar  true se a variável estiver vazia ex abaixo 

 - '' 
 - 0.0
 - '0'
 - null 

 */


@endphp 



@isset($fornecedores)


    
Fornecedor: {{$fornecedores [0]['nome'] }} 
<br>
status :{{$fornecedores [0]['status']}} 
<br> 

cidade :{{$fornecedores [0]['Cidade']}} 
<br> 

produto:{{$fornecedores [0] ['Produto']}} 
<br> 



    CNPJ:{{$fornecedores[0] ['CNPJ'] ?? ' Dado não foi preenchido '}}


@endisset



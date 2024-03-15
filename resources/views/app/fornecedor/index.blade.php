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

<br>
Fornecedor: {{$fornecedores[1]['nome'] }} 
<br>
status :{{$fornecedores [1]['status']}} 
<br> 

cidade :{{$fornecedores [1]['Cidade']}} 
<br> 

produto:{{$fornecedores [1]['Produto']}} 
<br> 
@isset($fornecedores [1] ['CNPJ'])
CNPJ: {{$fornecedores[1] ['CNPJ'] }}
@empty($fornecedores [1] ['CNPJ'])
    -  Vazio


@endempty

@endisset
@endisset 


@isset($fornecedores2)

<br>
Fornecedor: {{$fornecedores2[2]['nome'] }} 
<br>
status :{{$fornecedores2 [2]['status']}} 
<br> 

cidade :{{$fornecedores2 [2]['Cidade']}} 
<br> 

produto:{{$fornecedores2 [2]['Produto']}} 
<br> 
@isset($fornecedores2 [2] ['CNPJ'])
CNPJ: {{$fornecedores2[2] ['CNPJ'] }}
@empty($fornecedores2 [2] ['CNPJ'])
    -  Vazio 

@endempty

@endisset

@endisset



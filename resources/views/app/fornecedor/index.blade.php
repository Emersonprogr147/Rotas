<h3>Fornecedor</h3>
 

@php 
 /*
 if(isset($variavel)) {} // retornar  true se a variável estiver deifinida 
 */



@endphp 

@isset($fornecedores)

<br>
Fornecedor: {{$fornecedores[0]['nome'] }} 
<br>
status :{{$fornecedores [0]['status']}} 
<br> 

cidade :{{$fornecedores [0]['Cidade']}} 
<br> 

produto:{{$fornecedores [0]['Produto']}} 
<br> 

cnpj :{{$fornecedores [0]['CNPJ']}} 
<br> 
@endisset


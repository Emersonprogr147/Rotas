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

    CNPJ:{{$fornecedores[1] ['CNPJ'] ?? ' Dado não foi preenchido corretamente '}}
<br> 
Telefone: ({{$fornecedores[0]   ['ddd'] ?? '  '}}) {{  $fornecedores [1] ['telefone'] ?? ''}}
@switch($fornecedores [0] ['ddd'])
@case('11')
 São Paulo -  SP

    
@break
@case('32')
Juiz de Fora - MG
    
@break

@case('48')
Criciuma - SC 
    
@break

@endswitch
@endisset



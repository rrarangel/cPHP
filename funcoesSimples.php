<?php 

    #exemplo de função simples sem o uso do return.
 function textoSimples(){
     echo 'Texto simples através de uma função';
 }

 function retornaSoma(){
    return 5 * 3;
}

 function retornaTexto($nome){
     echo 'O nome informado foi: ' . $nome;
 }

 function retornaSomaParam($vlo1, $vlo2){
     return $vlo1 + $vlo2;
 }

  /*
    textoSimples();
    echo '<br />';

    $valor = retornaSoma();
    echo $valor;
    */

 //retornaTexto('Rodrigo');
 $retorno = retornaSomaParam(5,5);
 echo 'O valor da soma foi: ' .$retorno;

    
?>
<?php 

    #verifica se a variavel esta vazia
    $valor = 'teste';
    if (empty($valor)){
        echo 'Vazio';
    }else{
        echo 'Nao Vazio';
    }

    echo '<hr />';

    #Verifica se a variavel foi iniciada
    $valor2 = 0800;
    if (isset($valor2)){
        echo 'Foi iniciada';
    }else{
        echo 'Não foi iniciada';
    }

    echo '<hr />';

    #verifica se a varieval é numerica;
    $valor3;
    if (is_numeric($valor3)){
        echo 'É numero';
    }else{
        echo 'Não é numero';
    }

?>
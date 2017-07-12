<?php

    require_once 'classes/Calculadora.php';

    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    $calculadora = new Calculadora();
    $calculadora->setNumero1($n1);
    $calculadora->setNumero2($n2);

    switch($operacao){
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
        $calculadora->subtrair();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;
    case 'dividir':
        $calculadora->dividir();
        break;
    }


    $calculadora->getTotal();

    

?>
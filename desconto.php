<?php 
    
    require_once("funcoesDesconto.php");

 $valorTotal = 800;
 $valorDesconto = 10;

 $totalComDesconto = calculaDesconto($valorTotal, $valorDesconto);
 

?>

Valor total: R$ <?php echo $valorTotal ?> <br>
Valor desconto: <?php echo $valorDesconto ?>% <br>
Valor total com desconto: R$ <?php echo $totalComDesconto ?>
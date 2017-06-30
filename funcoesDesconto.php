<?php 

    function calculaDesconto($vloTotal, $vloDesconto){
        
        $vDesconto = $vloTotal * ($vloDesconto / 100);
        
        return $vFinal = $vloTotal - $vDesconto;
        
    }

?>
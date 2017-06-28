<!DOCTYPE html>
<html>
<head>
    <title>Arrays</title>
</head>

<body>
    <p>PHP Arrays</p>
    
    <?php
    
        #Forma mais simples de declaração, informando o indice.
      $listaCompras[1] = 'Laranja';
      $listaCompras[2] = 'Maçã';
      $listaCompras[3] = 'Melancia';
      $listaCompras[4] = 'Abacate';
      $listaCompras[5] = 'Mamão';
    
        echo 'Fruta ' . $listaCompras[3] . '<br />';
        echo 'Fruta ' . $listaCompras[1] . '<br />';
    
        echo '<br />';
    
        print_r($listaCompras);
    
      # Passando valores através de parametros.
        echo '<p> Passando valores através de parametros:</p>';
    
        $listaCompras = array(
            'a' => 'Banana', 'b' => 'Maçã', 'c' => 'Uva', 'd' => 'Acerola' 
        );

    
        print_r($listaCompras);
    
    ?>
    
    

</body>    
    

</html>
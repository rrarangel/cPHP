<!DOCTYPE html>
<html>
<head>
    <title>Arrays MultiDimensionais</title>
</head>

<body>
    <p>PHP Arrays MultiDimensionais</p>
    
    <?php
    
        #arrays multidimensionais.
      $xadrex['a'][8] = 'peça 1';
      $xadrex['b'][8] = 'peça 2';
      $xadrex['c'][8] = 'peça 3';
      $xadrex['d'][8] = 'peça 4';
      $xadrex['e'][8] = 'peça 5';
      $xadrex['f'][8] = 'peça 6';
      $xadrex['g'][8] = 'peça 7';
      $xadrex['h'][8] = 'peça 8';
    
      $xadrex['a'][7] = 'peça 9';
      $xadrex['b'][7] = 'peça 10';
      $xadrex['c'][7] = 'peça 11';
      $xadrex['d'][7] = 'peça 12';
      $xadrex['e'][7] = 'peça 13';
      $xadrex['f'][7] = 'peça 14';
      $xadrex['g'][7] = 'peça 15';
      $xadrex['h'][7] = 'peça 16';
    
        #imprimindo todo o vetor
        print_r($xadrex);
    
        echo '<br /> <br />';
    
            #imprimindo o valor de uma posição.
            print 'Peça única: ' . $xadrex['a'][7];
    
    ?>
    
    

</body>    
    

</html>
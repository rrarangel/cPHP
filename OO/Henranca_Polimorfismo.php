<?php
    
    class Felino{
        
        var $mamifero = 'sim';
        
        function Correr(){
            echo 'Correndo como felino...';
        }
    
    }

        #Herança....
    class Gato extends Felino{        
    }

    class Leoa extends Felino{
        
        #Polimorfismo
        function Correr(){
            echo 'Correndo como uma Leoa...';
        }
        
    }

    $gato = new Gato();
    echo 'É mamífero: ' . $gato->mamifero . '<br>';
    echo $gato->Correr();
    echo '<br><br>';
 
    $leoa = new Leoa();
    echo $leoa->Correr();

    

?>
<?php

    class Pessoa{
    
        public $valor1;
        
        function __construct($nomeObj){
            $this->valor1 =  $nomeObj;
            echo 'Objeto ' . $this->valor1 . ' iniciado...<br>';
        }
       
        public function informa($obj){
            echo 'Objeto ' . $obj . ' finalizado com sucesso!<br>';
        }
        
        function __destruct(){
            echo 'Objeto ' . $this->valor1 . ' destruido...<br>';
        }
    
 }
    
    $pessoa = new Pessoa('quadrado');
    $pessoa->informa('o mesmo');
    
?>
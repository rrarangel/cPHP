<?php
    class Calculadora{
        
        private $numero1;
        private $numero2;
        private $total;
        
        function __construct(){
            $this->numero1 = 0;
            $this->numero2 = 0;
            $this->total = 0;
        }
        
        public function setNumero1($n1){
            $this->numero1 = $n1;
        }
        
        
        public function setNumero2($n2){
            $this->numero2 = $n2;
        }
        
        public function somar(){
            $this->total = $this->numero1 + $this->numero2;
        }
        
        public function subtrair(){
            $this->total = $this->numero1 - $this->numero2;
        }
        
        public function multiplicar(){
            $this->total = $this->numero1 * $this->numero2;
        }
        
        public function dividir(){
            $this->total = $this->numero1 / $this->numero2;
        }
        
        public function getTotal(){
            echo $this->total;
        }
        
        
    }

?>
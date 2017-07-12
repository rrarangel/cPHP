<?php

   class Veiculo{
    /*
        public - visivel em todas as classes e permite alterar seu valor;
        private - Não é visivel em todas as classes so é possivel alterar o seu valor atraves dos getters e setters;
        protected - Só é possivel alterar seu valor atraves das classes extendidas;
    */

    private $placa;
    private $cor;
    private $tipo;

    
    public function setPlaca($novaPlaca){
        $this->placa = $novaPlaca;
    }

    public function getPlaca(){
        return $this->placa;
    }

}

    $carro = new Veiculo();
   
    $carro->setPlaca('PJM0000');
    echo $carro->getPlaca();


?>
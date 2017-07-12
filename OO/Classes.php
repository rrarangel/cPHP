<?php 

    class Produto{
        
        #Atributos ------------------------------
        var $tamanho;
        var $peso;
        var $altura;
        var $largura;
        
        #SETTERS ---------------------------------
         function setTamannho($tam){
            $this->tamanho = $tam;
        }
        
         function setPeso($peso){
            $this->$peso = $peso;
        }
        
         function setAltura($altura){
            $this->altura = $altura;
        }
        
         function setLargura($largura){
            $this->$largura = $altura;
        }
        
        #GETTERS -------------------------------
          function getTamannho(){
            return $this->tamanho;
        }
        
         function getPeso(){
            return $this->$peso;
        }
        
         function getAltura(){
            return $this->altura;
        }
        
         function getLargura(){
            return $this->$largura;
        }
        
        
    }


    $produto = new Produto();
    $produto->setTamannho(50);
    $produto->setAltura(90);
    echo 'Tamanho: ' . $produto->getTamannho() . '<br>';
    echo 'Altura: ' . $produto->getAltura();

?>
<?php 
    
    function validaLogin($login, $senha){
        
        if($login == 'rr' && $senha == '123456'){
            return true;
        }
        
        return false;
        
    }

?>
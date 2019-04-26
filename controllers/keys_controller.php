<?php

class KeysController {

    public function searchLetters(){
        require_once 'models/keys.php';
        
        $key = new Key();
        $mostrar = $key->cifrarFrase();
        $tabla = $key->showLetters('clave');
        
        require_once 'views/mostrar-frase.php';
        
    }
    
     public function enviar(){
        require_once 'views/enviar.php';
        
         
    } 
    
}

?>
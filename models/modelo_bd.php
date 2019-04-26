<?php

require_once 'config/database.php';

class ModeloBd{
    public $db;
    
    public function __construct() {
        $this->db = database::conectar();
    }

    public function showLetters($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
    
    public function searchLetter ($letter){
        
        $query = $this->db->query("SELECT letter_key FROM clave WHERE letter = '".$letter."'");
        return $query;
    }
   
    public function cifrarFrase(){

        return  'Devuelve Frase Cifrada';
    } 
    
}


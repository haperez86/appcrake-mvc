<?php
require_once 'modelo_bd.php';


class Key extends ModeloBd{
    
    public $id_key;
    public $letter;
    public $letter_key;
    
    public function __construct() {
      parent::__construct();
    }
    

    
    public function cifrar($string) {
        
        for ($i = 0; $i < strlen($string); $i++)
        {
            $char = substr($string, $i, 1);
            $new_str = $new_str.searchLetters($char);
        }
        
        return $new_str;
    }

    public function searchLetters($letter){

        foreach (ModeloBd::searchLetter($letter) as $row){

            $char = $row[0];
             echo $char;
            return $char;
        }   
    }    
}


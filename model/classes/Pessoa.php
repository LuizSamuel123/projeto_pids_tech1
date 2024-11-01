<?php

class Pessoa {
    private $idPessoa;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $documento;
    private $tipoPessoa; //Jurídica ou Física;
    
    public function __construct() {
        
    }
    
    public function __get($param) {
        return $this->$param;
    }
    
    public function __set($param,$value) {
        $this->$param = $value;
    }
    
}
?>
<?php

class Doacao {
    
    private $idDoacao;
    private $descricao_inicial;
    private $descricao_final;
    private $data_entrada;
    private $data_saida;
    private $status;
    private $tipo_equipamento;
    private $observacoes;
    
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
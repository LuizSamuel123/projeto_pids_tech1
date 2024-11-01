<?php

require_once 'DB.php';

class enderecoDAO {
    
   /* public function list($id = null) {
        $where = ($id ? "where idEndereco = $id":'');
        $query = "SELECT * FROM endereco $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    */
    
    public function list($id = null){
    $where = ($id ? "where ie.idEndereco = $id":"");
    $query = "select ie.idEndereco,ie.estado,"
            . "in.nome as pessoa,ie.cidade, "
            . "ie.bairro,"
            . "ie.cep,"
            . "ie.rua,"
            . "ie.numero,"
            . "ie.complemento,"            
            . "from pessoa in
               INNER JOIN endereco it ON ie.idPessoa =
               ie.idPessoa $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    
    public function insert(Endereco $obj) {
        $query = "INSERT INTO endereco "
                . "(idEndereco, estado,cidade,bairro,cep,rua,numero,complemento"
                . "idPessoa) "
                . "VALUES (null,pestado,pcidade,pbairro,pcep,prua,pnumero,pcomplemento"
                . "pidPessoa) ";
        
       $conn = DB::getInstancia()->prepare($query);
        
        $conn->execute(array
            (':pestado'=>$obj->estado,
            ':pcidade'=>$obj->cidade,
            ':pbairro'=>$obj->bairro,
            ':pcep'=>$obj->cep,
            ':prua'=>$obj->rua,
            ':pnumero'=>$obj->numero,
            ':pcomplemento'=>$obj->complemento,
            ':pidPessoa'=>$obj->idPessoa));
        
        return $conn->rowCount()>0;
    }
    
    public function update(Encereco $obj) {
        $query = "UPDATE encereco set estado = :pestado,cidade = :pdcidade,bairro = :pbairro, cep = :pcep,rua = :prua,
            numero = :pnumero, complemento = :pcomplemento, idPessoa = :pidPessoa"
                ."WHERE idEncereco = :pidEncereco";
        
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array
            (':null,'
            . ':pestado'=>$obj->estado,
            ':pcidade'=>$obj->cidade,
            ':pbairro'=>$obj->bairro,
            ':pcep'=>$obj->cep,
            ':prua'=>$obj->rua,
            ':pnumero'=>$obj->numero,
            ':pcomplemento'=>$obj->complemento,
            ':pidPessoa'=>$obj->idPessoa));
        
        return $conn->rowCount()>0;
    }
    
    public function delete($id) {
        $query = "DELETE from encereco "
                . "where idEncereco = :pid";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':pid'=>$id));
        return $conn->rowcount()>0;
    }
}
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  
        <?php
        /*
    public function insert(Endereco $obj) {
    $query = "INSERT INTO endereco (idEndereco, estado, 
        cidade, bairro, CEP, rua, numero, complemento, idPessoa) 
              VALUES (null, :estado, :cidade, :bairro, :CEP, :rua, 
              :numero, :complemento, :idPessoa)";

    $conn = DB::getInstancia()->prepare($query);

    $parametros = [
        ':estado' => $obj->estado,
        ':cidade' => $obj->cidade,
        ':bairro' => $obj->bairro,
        ':CEP' => $obj->CEP,
        ':rua' => $obj->rua,
        ':numero' => $obj->numero,
        ':complemento' => $obj->complemento,
        ':idPessoa' => $obj->idPessoa
    ];

    $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    public function update(Endereco $obj) {
    $query = "UPDATE endereco SET 
        estado = :estado, 
        cidade = :cidade, 
        bairro = :bairro, 
        CEP = :CEP, 
        rua = :rua, 
        numero = :numero, 
        complemento = :complemento, 
        idPessoa = :idPessoa
    WHERE idEndereco = :idEndereco";

    $conn = DB::getInstancia()->prepare($query);

    $parametros = [
        ':estado' => $obj->estado,
        ':cidade' => $obj->cidade,
        ':bairro' => $obj->bairro,
        ':CEP' => $obj->CEP,
        ':rua' => $obj->rua,
        ':numero' => $obj->numero,
        ':complemento' => $obj->complemento,
        ':idPessoa' => $obj->idPessoa,
        ':idEndereco' => $obj->idEndereco
    ];

    $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    
    public function delete($id) {
        $query = "DELETE from endereco where idendereco = :pid";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':pid'=>$id));
        return $conn->rowcount()>0;
    }
}
         
         */
?>


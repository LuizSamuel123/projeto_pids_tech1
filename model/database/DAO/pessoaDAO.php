<?php

require_once 'DB.php';

class pessoaDAO {
    
    public function list($id = null) {
        $where = ($id ? "where idpessoa = $id":'');
        $query = "SELECT * FROM pessoa $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function insert(pessoa $obj) {
    $query = "INSERT INTO pessoa (idPessoa, nome, sobrenome, email, telefone, documento, tipo_pessoa) 
              VALUES (null, :nome, :sobrenome, :email, :telefone, :documento, :tipo_pessoa)";

    $conn = DB::getInstancia()->prepare($query);

    $parametros = [
        ':nome' => $obj->nome,
        ':sobrenome' => $obj->sobrenome,
        ':email' => $obj->email,
        ':telefone' => $obj->telefone,
        ':documento' => $obj->documento,
        ':tipo_pessoa' => $obj->tipo_pessoa
    ];

    $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    
    public function update(pessoa $obj) {
    $query = "UPDATE pessoa SET 
        nome = :nome, 
        sobrenome = :sobrenome,
        email = :email,
        telefone = :telefone,
        documento = :documento,
        tipo_pessoa = :tipo_pessoa
    WHERE idPessoa = :idPessoa";

    $conn = DB::getInstancia()->prepare($query);

    $parametros = [
        ':nome' => $obj->nome,
        ':sobrenome' => $obj->sobrenome,
        ':email' => $obj->email,
        ':telefone' => $obj->telefone,
        ':documento' => $obj->documento,
        ':tipo_pessoa' => $obj->tipo_pessoa,
        ':idPessoa' => $obj->idPessoa
    ];

    $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    
    public function delete($id) {
        $query = "DELETE from pessoa where idpessoa = :pid";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':pid'=>$id));
        return $conn->rowcount()>0;
    }
}
?>

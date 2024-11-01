<?php

require_once 'DB.php';

class usuarioDAO {
    
    public function list($id = null) {
        $where = ($id ? "where idusuario = $id":'');
        $query = "SELECT * FROM usuario $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function insert(Usuario $obj) {
    $query = "INSERT INTO usuario (login, senha) VALUES (:login, :senha)";
    $conn = DB::getInstancia()->prepare($query);
    $conn->bindValue(':login', $obj->login);
    $conn->bindValue(':senha', password_hash($obj->senha, PASSWORD_DEFAULT));
    return $conn->execute();
}
    
    public function update(Usuario $obj) {
    $query = "UPDATE usuario SET login = :login, senha = :senha WHERE idusuario = :idusuario";
    $conn = DB::getInstancia()->prepare($query);
    $conn->bindValue(':login', $obj->login);
    $conn->bindValue(':senha', password_hash($obj->senha, PASSWORD_DEFAULT));
    $conn->bindValue(':idusuario', $obj->idusuario);
    return $conn->execute();
}
    
    public function delete($id) {
        $query = "DELETE from usuario where idusuario = :pid";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':pid'=>$id));
        return $conn->rowcount()>0;
    }
}
?>


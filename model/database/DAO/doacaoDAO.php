<?php

require_once 'DB.php';

class doacaoDAO {
    
    public function list($id = null) {
        $where = ($id ? "where iddoacao = $id":'');
        $query = "SELECT * FROM doacao $where";
        $conn = DB::getInstancia()->query($query);
        $resultado = $conn->fetchAll();
        return $resultado;
    }
    
    public function insert(Doacao $obj) {
        $query = "INSERT INTO doacao (,idDoacao,
            descricao_inicial,
            descricao_final,data_entrada,data_saida,
            status,tipo_equipamento,observacoes;
                ) VALUES (null,:descricao_inicial,
                                :descricao_final,
                                :data_entrada,
                                :data_saida,
                                :status,
                                :tipo_equipamento,
                                :observacoes)";
        $parametros = [
        ':descricao_inicial' => $obj->descricao_inicial,
        ':descricao_final' => $obj->descricao_final,
        ':data_entrada' => $obj->data_entrada,
        ':data_saida' => $obj->data_saida,
        ':status' => $obj->status,
        ':tipo_equipamento' => $obj->tipo_equipamento,
        ':observacoes' => $obj->observacoes
    ];

    $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    
    public function update(Doacao $obj) {
        $query = "UPDATE doacao SET 
        descricao_inicial = :pdescricao_inicial, 
        descricao_final = :pdescricao_final, 
        data_entrada = :pdata_entrada, 
        data_saida = :pdata_saida, 
        status = :pstatus, 
        tipo_equipamento = :ptipo_equipamento, 
        observacoes = :pobservacoes
    WHERE idDoacao = :pidDoacao";
        
        $conn = DB::getInstancia()->prepare($query);
            $parametros = [
        ':pdescricao_inicial' => $obj->descricao_inicial,
        ':pdescricao_final' => $obj->descricao_final,
        ':pdata_entrada' => $obj->data_entrada,
        ':pdata_saida' => $obj->data_saida,
        ':pstatus' => $obj->status,
        ':ptipo_equipamento' => $obj->tipo_equipamento,
        ':pobservacoes' => $obj->observacoes,
        ':pidDoacao' => $obj->idDoacao
    ];
        
          $conn->execute($parametros);

    return $conn->rowCount() > 0;
}
    
    public function delete($id) {
        $query = "DELETE from doacao where iddoacao = :pid";
        $conn = DB::getInstancia()->prepare($query);
        $conn->execute(array(':pid'=>$id));
        return $conn->rowcount()>0;
    }
}
?>

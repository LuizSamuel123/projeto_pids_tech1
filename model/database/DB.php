<?php
abstract class DB {
    private static $instancia;

    public static function getInstancia() {
        $host = "localhost";
        $dbname = "projeto_pids_tech";
        $user = "root";
        $password = "";

        if (empty(self::$instancia)) {
            try {
                self::$instancia = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
            } catch (PDOException $e) {
                throw new Exception("Erro de conexão: " . $e->getMessage());
            }
        }

        return self::$instancia;
    }

    protected function __construct() {}
    private function __clone() {}
}

?>





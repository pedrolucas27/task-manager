<?php

class Conexao {

    public static function conectar() {
        $conn = new mysqli("localhost", "root", "root", "Task", 3306, "/var/run/mysqld/mysqld.sock");
        if ($conn->connect_error) {
            die("Falha na Conexão: " . $conn->error);
        }
        $conn->set_charset("utf8");
        return $conn;
    }

    public static function executarQuery($query) {
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $conexao->close();
        return $resultado;
    }

}

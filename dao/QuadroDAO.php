<?php
require_once 'Conexao.php';
class QuadroDAO {

    public static function inserir($quadro) {
        $c1 = $quadro->getTitulo();
        $c2 = $quadro->getColor();
        $c3 = $quadro->getEmail_usuario();
        $query = "INSERT INTO Quadro (titulo,color,email_usuario) VALUES ('$c1','$c2','$c3')";
        return Conexao::executarQuery($query);
    }

    public static function listar($email) {
        $query = "SELECT * FROM Quadro WHERE email_usuario = '$email'";
        return Conexao::executarQuery($query);
    }

}

<?php
require_once 'Conexao.php';
require_once '../dominio/Usuario.php';
class UsuarioDAO {
   
    public static function inserir($usuario){
        $c1 = $usuario->getNome();
        $c2 = $usuario->getEmail();
        $c3 = $usuario->getSenha();
        $query = "INSERT INTO Usuario (nome,email,senha) VALUES('$c1','$c2','$c3')";
        return Conexao::executarQuery($query);
    }
    
    public static function buscar($email,$senha){
        $query = "SELECT * FROM Usuario WHERE email = '$email' AND senha = '$senha'";
        $tupla = Conexao::executarQuery($query);
        if(is_object($tupla)){
            if($tupla->num_rows > 0){
                while($t = $tupla->fetch_assoc()){
                    $u = new Usuario();
                    $u->setNome($t["nome"]);
                    $u->setEmail($t["email"]);
                    $u->setSenha($t["senha"]);
                    
                    return $u;
                }
            }
        }
        return null;
    }
}

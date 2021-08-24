<?php
require_once 'Conexao.php';
class TaskDAO {
    
    public static function inserir($task){
        $c1 = $task->getTitulo();
        $c2 = $task->getDesc();
        $c3 = $task->getColor_sprint();
        $c4 = $task->getIdStatus();
        $query = "INSERT INTO Tarefa (titulo,descricao,color_sprint,idStatus) VALUES ('$c1','$c2','$c3','$c4')";
        return Conexao::executarQuery($query);
    }
    
}

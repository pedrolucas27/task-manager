<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarefa</title>
        <link rel="stylesheet" href="css/style2.css"/>
        <link rel="stylesheet" href="css/style3.css"/>
        <link rel="stylesheet" href="css/form-popup2.css"/>
        <script src="js/quadro.js"></script>
    </head>
    <body>
        <header>
            <h2>Tasks</h2>
            <nav>
                <?php
                require_once './dominio/Usuario.php';
                session_start();
                $u = null;
                if (isset($_SESSION["usuario"])) {
                    $u = $_SESSION["usuario"];
                }
                echo "<a>" . $u->getNome() . "</a>"
                ?>
                <a href="task.php">Sair</a>
            </nav>
        </header>
        <div class="menu-vertical">
            <a href="#" class="active">Status</a>
            <a href="#">A Fazer</a>
            <a href="#">Fazendo</a>
            <a href="#">Finalizadas</a>
            <a href="#">Calendário</a>
        </div>

        <div id="principal">
            <label id="tarefas">Tarefas</label>
            <div class="card-task">
                <div class="header">
                    <h4 class="titulo-header">Titulo</h4>
                </div>
                <p class="txt"></p>
            </div> 
        </div>

        <button id="addTask" onclick="showPopup('popup-new-task', 'block')">+</button>
        <?php
        include_once './popupAddTask.php';
        ?>
        <script src="js/quadro.js"></script>
    </body>
</html>

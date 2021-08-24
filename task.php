<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quadros</title>
        <link rel="stylesheet" href="css/style2.css"/>
        <link rel="stylesheet" href="css/form-popup.css"/>
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
                echo"<a>" . $u->getNome() . "</a>"
                ?>
                <a href="index.php">Sair</a>
            </nav>
        </header>
        <div id="principal">
            </br>
            <label id="mq">Meus Quadros</label></br>
            <?php
            require_once './dao/QuadroDAO.php';
            require_once './dominio/Quadro.php';
            $quadros = Quadro::listar($u->getEmail());
            foreach ($quadros as $q) {
                $c = $q->getColor();
            ?>
                <div id="d" class="quadros" onclick="teste()" style="background-color:<?=$c?>">;
                <h4><?=$q->getTitulo()?></h4>;
                </div>;
            <?php } ?>
            <div id="quadro-novo" onclick="showPopup('popup-new-quadro', 'block')">
                <p id="p-qn">Criar novo quadro</p> 
            </div>
        </div>
            <?php
            include_once './popupQuadro.php';
            ?>
        <script src="js/modalQuadro.js"></script>
    </body>
</html>

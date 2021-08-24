<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/modalLogin.js"></script>
    </head>
    <body>
        <div id="id01" class="container2">
            <form id="form-login" method="post" action="ws/loginUsuario.php">
                <h2>Login</h2>
                <hr>
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="Dígite seu email" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Dígite sua senha" required>
                <hr>
                <input type="submit" value="Logar" class="registerbtn"/>
                <input class="cancel" value="Cancelar"/>
            </form>
        </div>
        <form id="form-cadastro" method="get" action="ws/cadastrarUsuario.php">
            <div class="container">
                <h2>Cadastre-se</h2>
                <hr>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Seu nome" id="ipt" required/>

                <label for="email">E-mail:</label></br>
                <input type="email" name="email" placeholder="Dígite seu email" id="ipt2" required/></br>

                <label for="senha" id="s">Senha:</label></br>
                <input type="password" name="senha" placeholder="Dígite sua senha" id="ipt3" required/></br>

                <hr>
                <input type="submit" value="Cadastrar" id="cds" class="registerbtn"/>
                <input class="cancel" value="Cancelar" onclick="limparCamposCadastro()"/>
                <p class="signin">Já possui cadastro ?<a href="#" onclick="showModal('block')">Login</a></p>
            </div>
        </form> 
        <?php
            echo "<script>";
            if(isset($_GET["id"])){
                if($_GET["id"] == 1){
                    echo "alert('Usuário cadastrado com sucesso!');"; 
                    echo "showModal('block');";
                }else{
                    echo "alert('Erro ! Este usuário já esta cadastrado!');";
                }   
            }
            echo "</script>";
        ?>
    </body>
</html>

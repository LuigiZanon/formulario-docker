<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen"></link>
        <title>CRUD - Cadastrar</title>
    </head>
    <body> 
        <div>
            <h1 id="titulo">Cadastrar Usuário</h1>
            <p id="subtitulo"> Insira suas informações</p>
        </div>

        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <form method="POST" action="processa.php">

            <fieldset class="nome">
                <div>
                    <label for="nome"><strong>Nome:</strong><label>
                    <input type="text" name="nome" placeholder="Digite o nome completo" required><br><br>
                </div>
            </fieldset>

            <fieldset class="email">
                <div>
                    <label for="email"><strong>Email:<strong><label>
                    <input type="email" name="email" placeholder="Digite o seu email" required><br><br>
                </div>
            </fieldset>

            <button class="botao" type="submit">Concluído</button>
        </form>
    </body>
</html>
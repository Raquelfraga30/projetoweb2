<?php
//Importação de arquivos
include "./const.php";
include "./src/model/user.php";

if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            //Caso o login retorne "true", inicializa-se o
            //gerenciamento de sessões
            session_start();
            //é apresentado um alert javascript
            echo "<script> alert('AUTENTICADO! ✅') </script>";
            //é criada uma sessão com os dados do objeto retornado
            $_SESSION["user"] = $user->getObject();
            //e então somos redirecionados para a pagina de perfil
            //var_dump($_SESSION["user"]);
            header("Refresh: 0; URL = ".LOCAL."/src/view/profile.php");
        } else {
            echo "<script> alert('ACESSO NEGADO! ❌') </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= DESCRIPTION ?>">
    <meta name="keywords" content="<?= KEYWORDS ?>">
    <meta name="author" content="<?= AUTHOR ?>">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <div id="login">
        <img src="./assets/img/logotipo.png" alt="Imagem" width="150">
        <h1>Login</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Usuário">
                <br><br>
                <input type="password" name="pass" id="pass" class="login" placeholder="Senha" onmouseover="showPass(this)" onmouseleave="hidePass(this)">
                <br><br>
                <a href="#">Esqueci a senha</a>
            </div>
            <br><hr><br>
            <input type="submit" value="Entrar 🚪">
            <br>
        </form>
        <a href="<?= LOCAL ?>/src/view/register.php">Cadastrar-se</a>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>
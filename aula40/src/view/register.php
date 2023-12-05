<?php
//Importação de arquivos
include "/xampp/htdocs/aula40/const.php";

if( isset($_POST["user"]) ){
    $user = $_POST["user"];
} else{
    $user = null;
}

if( isset($_POST["email"]) ){
    $email = $_POST["email"];
} else{
    $email = null;
}

if( isset($_POST["pass"]) ){
    $pass = $_POST["pass"];
} else{
    $pass = null;
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
    <link rel="shortcut icon" href="<?= LOCAL ?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= LOCAL ?>/assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <div id="login">
        <h1>Registro</h1>
        <form action="#" method="post"  onsubmit="return checkPass()">
            <div id="login-fields">
                <input type="text" required name="user" id="user" class="login" placeholder="Usuário *">
                <br><br>
                <input type="email" required name="email" id="email" class="login" placeholder="Email *">
                <br><br>
                <input type="password" required name="pass" id="pass" class="login" placeholder="Senha *">
                <br><br>
                <input type="password" required name="pass-confirm" id="pass-confirm" class="login" placeholder="Confirmar senha *">
                <br><br>
                <span>* Campos obrigatórios</span>
            </div>
            <br><hr><br>
            <input type="submit" value="Registrar ✔">
            <br>
        </form>
        <a href="<?= LOCAL ?>">Voltar para login</a>
    </div>
    
    <script src="<?= LOCAL ?>/assets/js/script.js"></script>
</body>
</html>
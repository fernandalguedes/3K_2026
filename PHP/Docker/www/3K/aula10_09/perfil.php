<?php
session_start();
//protegemos a página caso não tenho usuário logado
if (!isset($_SESSION['usuario_id'])) {

    header("Location: login.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Meu Perfil</title>
</head>

<body>

    <h1>Meu Perfil</h1>

    <p>
        Nome:
        <?php echo $_SESSION['usuario_nome'] ?>
    </p>

    <p>
        E-mail:
        <?php echo $_SESSION['usuario_email'] ?>
    </p>

    <p>
        ID:
        <?php echo $_SESSION['usuario_id'] ?>
    </p>

    <br>

    <a href="logout.php">
        Sair
    </a>

</body>

</html>

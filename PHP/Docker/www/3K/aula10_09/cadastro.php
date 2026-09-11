<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

    <h1>Criar conta</h1>

    <form action="cadastro.php" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br><br>
        <button type="submit">
            Cadastrar
        </button>

    </form>
    <br>
    <a href="login.php">
        Já tenho uma conta
    </a>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    require"conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //aqui protegemos a senha hash, assim o valor armazenado não será o 
    // valor real e sim um hash da senha
    $senhaHash = password_hash($senha,PASSWORD_DEFAULT);
    //inserindo usuário no BD
    $sql = "INSERT INTO usuarios
            (nome, email, senha)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sss",
        $nome,
        $email,
        $senhaHash
    );

    if ($stmt->execute()) {

        echo "<script> 
        alert('Cadastro realizado com sucesso!')</script>";
        echo "<br><br>";
        echo "<a href='login.php'>";
        echo "Fazer login";
        echo "</a>";

    } else {

        echo "Erro ao realizar cadastro.";
    }

}


?>
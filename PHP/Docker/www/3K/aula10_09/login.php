<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    <form action="autenticar.php" method="post">

        <label>E-mail:</label>
        <input
            type="email"
            name="email"
            required
        >

        <br><br>

        <label>Senha:</label>
        <input
            type="password"
            name="senha"
            required
        >

        <br><br>

        <button type="submit">
            Entrar
        </button>

    </form>

    <br>

    <a href="cadastro.php">
        Criar uma conta
    </a>

</body>

</html>


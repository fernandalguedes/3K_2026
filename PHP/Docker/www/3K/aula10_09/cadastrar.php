<?php
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

    echo "Cadastro realizado com sucesso!";
    echo "<br><br>";
    echo "<a href='login.php'>";
    echo "Fazer login";
    echo "</a>";

} else {

    echo "Erro ao realizar cadastro.";
}
?>


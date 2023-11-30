<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Cadastro de conta</h1>
    <form action="cadastro" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>        
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
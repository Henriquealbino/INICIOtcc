<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'sislogin';

    
    $conexao = new mysqli($host, $usuario, $senha, $banco);
    
    if ($conexao->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
    }

    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Insira os dados na tabela
    $sql = "INSERT INTO cadastro_users (nome, sobrenome, email, telefone) VALUES ('$nome', '$sobrenome', '$email', '$telefone')";

    if ($conexao->query($sql) === TRUE) {
        header('Location: cadastro_usuarios.php');
    } else {
        echo 'Erro ao cadastrar usuário: ' . $conexao->error;
    }

    $conexao->close();
}
?>

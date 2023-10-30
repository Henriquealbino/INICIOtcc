<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome_livro = $_POST["nome_livro"];
    $isbn = $_POST["isbn"];
    $categoria = $_POST["categoria"];
    $edicao = $_POST["edicao"];
    $autor = $_POST["autor"];
    $data_lancamento = $_POST["data_lancamento"];

   
    $targetDir = "./IMG"; 
    $targetFile = $targetDir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

   
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem válido.";
        $uploadOk = 0;
    }

    
    if (file_exists($targetFile)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    
    if ($_FILES["imagem"]["size"] > 500000) {
        echo "Desculpe, o arquivo é muito grande.";
        $uploadOk = 0;
    }

    
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Desculpe, o arquivo não foi enviado.";
    } else {
        
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
           
            $host = 'localhost';
            $usuario = 'root';
            $senha = '';
            $banco = 'sislogin';

            $conexao = new mysqli($host, $usuario, $senha, $banco);

            if ($conexao->connect_error) {
                die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
            }

            
            $sql = "INSERT INTO cadastro_livros (nome_livro, isbn, categoria, edicao, autor, data_lancamento, imagem)
                    VALUES ('$nome_livro', '$isbn', '$categoria', '$edicao', '$autor', '$data_lancamento', '$targetFile')";

            if ($conexao->query($sql) === TRUE) {
                echo "Livro cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o livro: " . $conexao->error;
            }

            $conexao->close();
        } else {
            echo "Houve um erro ao enviar o arquivo.";
        }
    }
} else {
    echo "Acesso inválido ao arquivo.";
}
?>

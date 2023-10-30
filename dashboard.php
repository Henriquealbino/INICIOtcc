<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="icon" type="image/png" href="./img/_livrosicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
        body {
            background-image: url('IMG/_Fundolivro.jpg'); 
            background-size: cover;
            width: 100%;
            height: 100vh;
            
        }

        .menu-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .menu-button {
            background-color: sienna;
            color: #fff;
            border: none;
            border-radius: 0px;
            padding: 70px 35px;
            margin: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        
        .navbar-container {
            background-color: sienna;
            padding: 10px 0; 
            display: flex;
            align-items: center;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
            margin-right: 250px;
            text-decoration: none;
        }

        .btn-sair {
            background-color: #dc3545;
            color: whitesmoke;
            margin-left: 250px;
        }

        .user-greeting {
            color: #fff;
            margin-right: 250px;
        }

        .logo-img {
            width: 80px;
            height: 80px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
    <div class="navbar-container">
        <img src="./IMG/bababoy.png" alt="logo biblioteca" class="logo-img">
        <span class="navbar-brand">Sistema Biblioteca</span>
        <span class="user-greeting">
            <?php
                print "Olá, " . $_SESSION["nome"];
            ?>
        </span>
        <a href="logout.php" class="btn btn-sair">Sair</a>
    </div>

    <div class="menu-container">
        <button class="menu-button" onclick="openusuarios()">Cadastro de Usuários</button>
        <button class="menu-button" onclick="openCadastroLivros()">Cadastro de Livros</button>
        <button class="menu-button" onclick="openEmprestimosLivros()">Empréstimos de Livros</button>
    </div>

    <script>
    function openusuarios() {
        window.location.href = 'cadastro_usuarios.php'; 
    }

    function openCadastroLivros() {
        window.location.href = 'cadastro_livros.php'; 
    }

    function openEmprestimosLivros() {
        window.location.href = 'emprestimos_livros.php'; 
    }
    </script>
</body>
</html>

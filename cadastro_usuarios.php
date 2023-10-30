<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>

    <link rel="icon" type="image/png" href="./img/_livrosicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc
    DSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('IMG/_Fundolivro.jpg'); 
            background-size: cover;
            width: 100%;
            height: 100vh;
            margin: 0;
            
        }


        .navbar-container {
            background-color: sienna;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }


        .navbar-brand {
            color: #fff;
            font-size: 24px;
            margin-right: 250px;
        }


        .page-text {
            color: #fff;
            font-size: 20px;
            margin-left: 100px;
            margin-right: 300px;
        }

        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-img {
            width: 80px;
            height: 80px;
            margin-right: 80px;
        }

        .logo-img2 {
            width: 80px;
            height: 80px;
        }

        .user-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            margin: 20px auto;
            background-color: sienna;
        }
        
        .table-container { 
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: 20px auto;
            background-color: sienna;
            
        }

        table {
            width: 100%;
            border-collapse: collapse; 
        }

         .baba {
            padding: 2px;
            text-align: center;
            
            
            
        }


        th {
            padding: 10px;
            background-color: #555;
            color: white;
            
        }

        .form-input {
            max-width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .form-button {
            background-color: whitesmoke;
            color: sienna;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        h2{
            text-align: center;
            border-width: #fff;
            color: black;
            font-family: Arial;
        }
    </style>
</head>
<body>

    <div class="navbar-container">
        <img src="./IMG/bababoy.png" alt="logo biblioteca" class="logo-img">
        <span class="navbar-brand">Sistema Biblioteca</span>
        <span class="page-text">Cadastro de Usuários</span>
        <img src="./IMG/_users.png" alt="logo usuario" class="logo-img2">
    </div>

    <div class="content-container">
        <form class="user-form" method="post" action="enviocadastro_users.php">
            <input class="form-input" type="text" placeholder="Nome" name="nome">
            <input class="form-input" type="text" placeholder="Sobrenome" name= "sobrenome">
            <input class="form-input" type="email" placeholder="E-mail" name="email">
            <input class="form-input" type="tel" placeholder="Número de Telefone" name="telefone">
            <button class="form-button" type="submit">Cadastrar Usuário</button>
        </form>

        <div class="table-container">
            <h2>Usuários Cadastrados</h2>
            <table>
               
                <?php
                $host = 'localhost';
                $usuario = 'root';
                $senha = '';
                $banco = 'sislogin';

                $conexao = new mysqli($host, $usuario, $senha, $banco);

                if ($conexao->connect_error) {
                    die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
                }

                $sql = "SELECT nome, sobrenome, email, telefone FROM cadastro_users";
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td class="baba">' . $row['nome'] . '</td>';
                        echo '<td class="baba">' . $row['sobrenome'] . '</td>';
                        echo '<td class="baba">' . $row['email'] . '</td>';
                        echo '<td class="baba">' . $row['telefone'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="4">Nenhum usuário cadastrado.</td></tr>';
                }                

                $conexao->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>


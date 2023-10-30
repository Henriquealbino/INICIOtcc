<?php
$mysqli = new mysqli("localhost", "root", "", "sislogin");

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM cadastro_livros";
$result = $mysqli->query($sql);
?>

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
            background-color: whitesmoke;
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
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 68%;
           
        }
        .logo-img {
            width: 80px;
            height: 80px;
            margin-right: 80px;
        }
        .logo-img2{
            width: 110px;
            height: 80px;
        }
        #cadastrar-livro-button {
        display: block; 
        background-color: sienna;
        color: whitesmoke;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }


        #livro-form {
        display: none;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        max-width: 400px;
        margin: 20px auto;
        background-color: sienna;
    }

        #livro-form input[type="file"],
        #livro-form input[type="text"] {
        max-width: 100%;
        padding: 10px;
        margin: 10px 0;
    }

        #livro-form button {
        background-color: whitesmoke;
        color: sienna;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
        #livro-form.open #cadastrar-livro-button {
        display: none; 
    }

    
    .livros-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 5px;
        
    }

    .livro {
        width: 250px;
        background-color: sienna;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
        margin: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .livro img {
        
        height: auto;
        

    }

    .livro h2 {
        font-size: 20px;
        margin: 10px 0;
    }

    .livro p {
        margin: 5px 0;
        
    }
    h3{
        text-align: center;
        font-family: Arial;
        font-size: 24px;
    }


    </style>
</head>
<body>

    <div class="navbar-container">
        <img src="./IMG/bababoy.png" alt="logo biblioteca" class="logo-img">
        <span class="navbar-brand">Sistema Biblioteca</span>
        
        <span class="page-text">Cadastro de Livros</span>
        <img src="./IMG/_livro.png" alt="logo usuario" class="logo-img2">
    </div>


    

    <div class="content-container">
        <button id="cadastrar-livro-button" class="form-button" onclick="showForm()">Cadastrar Livro</button>

        <div id="livro-form" style="display: none;">
    <form class="user-form" method="post" action="enviocadastro_livros.php" enctype="multipart/form-data">
        <input type="file" name="imagem" accept="image/*"> 
        <input class="form-input" type="text" placeholder="Nome do Livro" name="nome_livro">
        <input class="form-input" type="text" placeholder="ISBN" name="isbn">
        <input class="form-input" type="text" placeholder="Categoria" name="categoria">
        <input class="form-input" type="text" placeholder="Edição" name="edicao">
        <input class="form-input" type="text" placeholder="Autor" name="autor">
        <input class="form-input" type="text" placeholder="Data de Lançamento" name="data_lancamento">
        <button class="form-button" type="submit">Cadastrar Livro</button>
    </form>
    </div>

        
    </div>
        <h3>Livros cadastrados</h3>
    <script>
    function showForm() {
        var livroForm = document.getElementById("livro-form");
        var cadastrarLivroButton = document.getElementById("cadastrar-livro-button");
        livroForm.style.display = "block";
        cadastrarLivroButton.style.display = "none";
    }
</script>
    <div class="livros-container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="livro">
            <img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome_livro']; ?>" width="150">

                <h2><?php echo $row['nome_livro']; ?></h2>
                <p>Autor: <?php echo $row['autor']; ?></p>
                <p>ISBN: <?php echo $row['isbn']; ?></p>
                <p>Categoria: <?php echo $row['categoria']; ?></p>
                <p>Edição: <?php echo $row['edicao']; ?></p>
                <p>Data de Lançamento: <?php echo $row['data_lancamento']; ?></p>
            </div>
    <?php endwhile; ?>
</div>


</body>
</html>
</body>
</html>
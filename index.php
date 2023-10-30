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
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url('IMG/_Fundolivro.jpg'); 
            background-size: cover; 
            width: 100%; 
            height: 400px; 
        }
        .login{
            width:100%;
            height:100vh;
            align-items:center;
            justify-content:center;
            display:flex;
            
        }
        .card{
            background-color: sienna;
        }
    </style>
</head>
<body>
  <div class="login">  
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card-body text-center">
                        <img src="./IMG/_perfil.jpg" alt="Imagem de Perfil" class="rounded-circle" width="115" height="115" >
                    </div>
                <div class="card">
                
                    <div class="card-body"> 
                        <form action="login.php" method="post">
                        <div>
                            <div class="mb-3">
                            <label>usuário</label>
                            <input type="text"
                            name="usuario"
                            class="form-control">
                            </div>
                        </div>
                        <div>
                         <div class="mb-3">
                            <label>Senha</label>
                         <input type="password"
                         name="senha"
                            class="form-control">
                            </div>
                     </div>
                     <div>
                            <div class="mb-3">
                                <button type="submit" 
                             class="btn btn-primary">Enviar</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>  
</body>
</html>
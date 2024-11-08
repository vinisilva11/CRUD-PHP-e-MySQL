<?php 
       include "../valida.php";
?> 

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(./img/imagem.jpg);
            background-repeat: no-repeat;
        }

        p,
        h1,
        label {
            color: white;
        }

        .lista_foto {
            width: 70px;
            border-radius: 70px;
        }

        .mostra-foto {
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Sistema de Cadastro WEB. </h1>
            <p class="lead">Este é um sistema simplificado de cadastros. Base de estudos para a criaçãode sistemas Web com PHP e MySQL. </p>
            <hr class="my-4">
            <p>Cadastre-se aqui.</p>
            <a class="btn btn-primary btn-lg" href="tela_cadastro.php" role="button">Cadastre-se</a>
            <a class="btn btn-info btn-lg" href="pesquisa.php" role="button">Consultar Usuário</a>
            <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Sair</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
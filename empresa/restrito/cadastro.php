<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
    background-image: url(./img/imagem.jpg);
    background-repeat: no-repeat;
}

p, h1, label {
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

<body>
    <div class="container">
        <div class="row">
            <?php 
            include "conexao.php"; 

              $nome =clear($conn, $_POST['nome']);
              $endereco = clear($conn, $_POST['endereco']);
              $telefone = clear($conn, $_POST['telefone']);
              $email = clear($conn, $_POST['email']);
              $data_nasc = $_POST['data_nasc'];

              $foto = $_FILES['foto'];
              $nome_foto = mover_foto($foto);


              $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nasc`, `foto`) 
              
              VALUES ('$nome','$endereco','$telefone','$email','$data_nasc', '$nome_foto')";

              if (mysqli_query($conn, $sql)) {
                echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra-foto'>";
                mensagem("Os dados do funcionário $nome foi cadastrado com sucesso!", 'success'); 
              } else
                mensagem("Os dados do funcionário $nome não foi cadastrado!", 'danger');
            
            ?>
            <a href="tela_cadastro.php" class="btn btn-primary" >Voltar a página de cadastro</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
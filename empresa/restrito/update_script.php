<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
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
              $id = $_POST['id'];
              $nome = $_POST['nome'];
              $endereco = $_POST['endereco'];
              $telefone = $_POST['telefone'];
              $email = $_POST['email'];
              $data_nasc = $_POST['data_nasc'];

              $sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nasc` = '$data_nasc' WHERE cod_pessoa = $id";

              if (mysqli_query($conn, $sql)) {
                mensagem("Os dados do funcionário $nome foi alterado com sucesso!", 'success'); 
                
              } else
                mensagem("Os dados do funcionário $nome não foi alterado!", 'danger');
                
            ?>
        </div>

        <a href="index.php" class="btn btn-info">Voltar a página inicial</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
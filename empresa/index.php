<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(./restrito/img/imagem.jpg);
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
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="jumbotron">
            <h1 class="display-4 title text-center">Cadastre-se aqui</h1>
            <form action="index.php" method="post">
                <div class="mb-3 pt-5">
                    <label for="exampleInputEmail1" class="form-label">Login</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="login" aria-describedby="emailHelp">
                    <div class="form-text text-light">Entre com seus dados de acesso</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                <button type="submit" class="btn btn-success">Entrar</button>
            </form>
 
            <?php
            include "restrito/conexao.php"; 
              if (isset($_POST['login'])) {
                $login = mysqli_real_escape_string($conn,$_POST['login']);
                $senha= mysqli_real_escape_string($conn, $_POST['senha']);

    
                $sql = "SELECT * FROM `usuarios` WHERE login = '$login' AND senha = '$senha'";
                

                if ($result = mysqli_query($conn, $sql)) {
                  $num_registros = mysqli_num_rows($result);
                  if ($num_registros == 1) {
                    $linha = mysqli_fetch_assoc($result);

                    if (($login == $linha['login']) and ($senha == $linha['senha'])) {
                        session_start();
                        $_SESSION['login'] = "Vinicius";
                        header("location: restrito");
                    } else {
                        echo "<p class='text-danger'>Login inválido.</p>";    
                    }
                    } else {
                      echo "<p class='text-danger'>Login ou senha não encontrados ou inválido.</p>";
                }
                } else {
                    echo "Nenhum resultado no Banco de Dados";
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

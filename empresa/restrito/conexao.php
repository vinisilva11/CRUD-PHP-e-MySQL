<?php 
 $server = "localhost";
 $user = "root";
 $pass = "";
 $bd = "empresa";

 if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
    // echo "Usuário conectado";
 } else
    echo "Erro no sistema";

   function mensagem($texto, $tipo) {
      echo "<div class='alert alert-$tipo' role='alert'>
            $texto
         </div>";
   }

   function mostra_data($data) {
      $data_utf = explode("-", $data);
      $escreve = $data_utf[2] . "/" . $data_utf[1] . "/" . $data_utf[0];
      return $escreve;
   }

   function mover_foto($vetor_foto) {
      if (!$vetor_foto['error'] and ($vetor_foto['size'] <= 5000000)) {
         $nome_arquivo = date('Ymdhms') . ".jpeg";
         move_uploaded_file($vetor_foto['tmp_name'], "img/" .$nome_arquivo);
         return $nome_arquivo;
      } else {
         return 0;
      }
   }

   function clear($conexao, $texto_puro) {
      $texto = mysqli_real_escape_string($conexao, $texto_puro);
      $texto = htmlspecialchars($texto);
      return $texto;
   }

?>

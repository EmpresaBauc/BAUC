<?php
 $conexao = mysqli_connect('localhost','root','lucas');
 $banco = mysqli_select_db($conexao,'BAUC');
 mysqli_set_charset($conexao,'utf8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>BAUC</title>

  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap-3.3.7.min.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../libs/normalize/css/normalize-7.0.0.css">
</head>

<body>
<div class="container">
  <?php
      $sql = mysqli_query($conexao,"select * from marca") or die("Erro");
      while($dados=mysqli_fetch_assoc($sql))
      {
        echo $dados['cod_marca'].'-'.$dados['nome'].'<br>';
      }
  ?>

</div>
<body>

</html>

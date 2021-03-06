<?php require '../database/conexao.php' ?>
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
	 <div class="header">
	   <h1>BAUC - Cadastro Usuário</h1>
	   <nav>
	    <ul>
	      <li><a href="cadastro.php">Cadastro</a></li>
	      <li><a href="login.php">Login</a></li>
	    </ul>
	   </nav>
	 </div>
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">
			<form action="cadastrar.php" method="post">
			    <div class="form-group">
			        <label class="control-label" for="nome">Nome:</label>
			        <input class="form-control" type="text" id="nome" name="nome" />
			    </div>
			    <div class="form-group">
			        <label class="control-label" for="email">E-mail:</label>
			        <input class="form-control" type="email" id="email" name="email" />
			    </div>
			    <div class="form-group">
			        <label class="control-label" for="data">Data de Nascimento:</label>
			        <input class="form-control" type="date" id="data" name="data" />
			    </div>
			    <div class="form-group">
			        <label class="control-label" for="senha">Senha:</label>
			        <input class="form-control" type="password" id="senha" name="senha" />
			    </div>
			    <input type="submit" name="enviar" value="Enviar">
			</form>

		</div>
	 </div>
</div>

<script src="../libs/bootstrap/js/bootstrap-3.3.7.min.js"></script>
<script src="../libs/bootstrap/js/npm.js"></script>
<script src="../libs/jquery/js/jquery-3.2.1.min.js"></script>
</body>
</html>
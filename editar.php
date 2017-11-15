<?php 

include_once "conexao.php";  

$dados = editarCadastro($_POST["id"]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Crud em PHP com MySQL</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

	<div class="col-md-12">
		<a href="../index.php">
			<h1 class="text-center">Crud em PHP com MySQL</h1>
		</a>
	</div>
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><i class="glyphicon glyphicon-user"></i> Editar Usuário:</h1>
				</div>
				<div class="col-md-12">
					<form method="post" action="conexao.php">
						<div class="col-md-12">
							<div class="col-md-12">
								<label>Nome do Usuario:</label>
							</div>
							<div class="col-md-12">
								<input type="text" name="name" id="name" value="<?php echo $dados["nome"] ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<label>E-mail</label>
							</div>
							<div class="col-md-12">
								<input type="e-mail" name="email" id="email" value="<?php echo $dados["email"] ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<label>Senha</label>
							</div>
							<div class="col-md-12">
								<input type="text" name="senha" id="senha" value="<?php echo $dados["senha"] ?>">
							</div>
						</div>
						<div class="col-md-12" style="padding-top: 20px;">
							<input type="hidden" name="acao" value="editar">
							<input type="hidden" name="id" value="<?php echo $dados["id"] ?>">
							<input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
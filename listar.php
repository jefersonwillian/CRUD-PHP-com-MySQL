<?php 

include_once "conexao.php";  

$dados = viewCadastro();
?>

<div class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Lista dos Usuarios Cadastrados</h2>
			</div>
			<div class="col-md-12 table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>E-mail</th>
							<th width="100">Editar</th>
							<th width="100">Deletar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dados as $gerso){ ?>

						<tr>
							<td><?php echo $gerso["nome"] ?></td>
							<td><?php echo $gerso["email"]  ?></td>
							<td>
								<form name="editar" action="editar.php" method="post">
									<input type="hidden" name="id" value="<?php echo $gerso['id'] ?>">
									<button class="btn btn-success" ><i class="glyphicon glyphicon-cog"></i> Editar</button>
								</form>
							</td>
							<td>
								<form action="conexao.php" method="post">
									<input type="hidden" name="acao" value="deletar">
									<input type="hidden" name="id" value="<?php echo $gerso['id'] ?>">
									<button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Deletar</button>
								</form>
							</td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><i class="glyphicon glyphicon-user"></i> Cadastro de Usuário:</h1>
			</div>
			<div class="col-md-12">
				<form method="post" action="conexao.php">
					<div class="col-md-12">
						<div class="col-md-12">
							<label>Nome do Usuario:</label>
						</div>
						<div class="col-md-12">
							<input type="text" name="name" id="name" placeholder="Digite o seu nome">
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-12">
							<label>E-mail</label>
						</div>
						<div class="col-md-12">
							<input type="e-mail" name="email" id="email" placeholder="Digite o seu e-mail">
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-12">
							<label>Senha</label>
						</div>
						<div class="col-md-12">
							<input type="password" name="senha" id="senha" placeholder="Digite sua senha">
						</div>
					</div>
					<div class="col-md-12" style="padding-top: 20px;">
						<input type="hidden" name="acao" value="inserir">
						<input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
					</div>
				</form>
			</div>	
		</div>
	</div>
</div>
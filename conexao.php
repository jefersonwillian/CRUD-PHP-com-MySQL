<?php 
//ira verificar qual ação será tomada, para inserir, alterar ou deletar registros
if (isset($_POST["acao"])){
	if ($_POST["acao"] == "inserir") {
		inserirCadastro();
	}

	if($_POST["acao"] == "editar"){
		editarNovoCadastro();
	}

	if($_POST["acao"] == "deletar"){
		deletarCadastro();
	}
}

//Conexão com o banco de dados
function dbBanco(){
	$conexao = new mysqli("localhost", "root", "", "crud_php");

	return $conexao;
}

//Função que insere dados no banco
function inserirCadastro(){
	$banco = dbBanco();
	$sql = "INSERT INTO usuario (nome, email, senha)" . " VALUES ('{$_POST["name"]}','{$_POST["email"]}','{$_POST["senha"]}')";
	$banco->query($sql);
	$banco->close();

	voltarIndex();
} 

//função para exibir os dados na view
function viewCadastro(){

	$banco = dbBanco();

	$sql = "SELECT * FROM usuario ORDER BY id";

	$resultado = $banco->query($sql);

	while ($row = mysqli_fetch_array($resultado)){
		$grupo[] = $row;
	}

	return $grupo;
}

//função para EDITAR
function editarCadastro($id){

	$banco = dbBanco();

	$sql = "SELECT * FROM usuario WHERE id =".$id;

	$resultado = $banco->query($sql);

	$lista = mysqli_fetch_assoc($resultado);

	return $lista;

}

function editarNovoCadastro(){
	$banco = dbBanco();

	$sql = "UPDATE usuario SET nome='{$_POST["name"]}', email='{$_POST["email"]}', senha='{$_POST["senha"]}' WHERE id='{$_POST["id"]}'";
	
	$banco->query($sql);
	$banco->close();

	voltarIndex();
}

function deletarCadastro(){
	$banco = dbBanco();

	$sql = "DELETE FROM usuario WHERE id='{$_POST["id"]}'";
	
	$banco->query($sql);
	$banco->close();

	voltarIndex();
}


//função que retorna ao index
function voltarIndex(){
	header("Location:index.php");
}
<?php 

require_once("../../conexao.php");
@session_start();


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//$cpf_sem_traco = preg_replace('/[^0-9]/', '', $cpf);

if($nome == ''){
	echo "Preencha o Nome!";
	exit();
}


	//verificar duplicaidade de dados
	$res = $pdo->query("SELECT * from usuarios where cpf = '$cpf'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Registro já Cadastrado';
		exit();
	}


	$res = $pdo->prepare("INSERT into usuarios (nome, cpf, telefone, usuario, senha, nivel) values (:nome, :cpf, :telefone, :usuario, :senha, :nivel)");

	
	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);
	$res->bindValue(":nivel", 'Balconista');

	
	$res->execute();

	

	echo "Cadastrado com Sucesso!!";



?>
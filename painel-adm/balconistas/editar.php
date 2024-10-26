<?php 

require_once("../../conexao.php");
@session_start();

$id = $_POST['id'];
$reg_antigo = $_POST['reg_antigo'];

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


if($reg_antigo != $cpf){
	//verificar duplicaidade de dados
	$res = $pdo->query("SELECT * from usuarios where cpf = '$cpf'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Registro já Cadastrado';
		exit();
	}
}


 	$res = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, telefone = :telefone, usuario = :usuario, senha = :senha where id = :id");
 

	
	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);
	
	$res->bindValue(":id", $id);
	
	$res->execute();

	

	echo "Editado com Sucesso!!";


?>
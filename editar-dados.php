<?php 

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$senha = $_POST['senha'];




$res = $pdo->prepare("UPDATE into usuarios (nome, telefone, usuario, senha, nivel) values (:nome, :cpf, :telefone, :usuario, :senha, :nivel)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":usuario", $email);
    $res->bindValue(":senha", $senha);
    $res->bindValue(":nivel", 'Cliente');
    $res->bindValue(":telefone", $telefone);

    $res->execute();

    echo 'Editado com Sucesso!!';


    $res = $pdo->prepare("UPDATE into clientes (nome, telefone, email, rua, numero, bairro, cidade, estado, cep) values (:nome, :telefone, :email, :rua, :numero, :bairro, :cidade, :estado, :cep)");

    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":rua", $rua);
    $res->bindValue(":numero", $numero);
    $res->bindValue(":bairro", $bairro);
    $res->bindValue(":cidade", $cidade);
    $res->bindValue(":estado", $estado);
    $res->bindValue(":cep", $cep);


    $res->execute();



 ?>
<?php 
//Incluir o arquivo onde fizemos a configuracao e conexao com o banco de dados
include_once "config.php";

//Definir as variaveis e inicializa-las 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING ); 
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING );
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT ); 
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING );
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING );
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING );
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT );
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT ); 
/*
echo "Nome: $nome <br>";
echo "Endereço: $endereco <br>";
echo "Numero: $numero <br>";
echo "Bairro: $bairro <br>";
echo "Cidade: $cidade <br>";
echo "uf: $uf <br>";
echo "cep: $cep <br>";
echo "email: $email <br>";
echo "cpf: $cpf <br>"; */

$sql = "INSERT INTO cliente (nome, endereco, numero, bairro, cidade, uf, cep, email, cpf)
        VALUES ('$nome', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$cep', '$email', '$cpf') ";

$resultado = mysqli_query($conexao, $sql); 

if (isset($resultado)) {
        header("Location: listar.php");
}




?>
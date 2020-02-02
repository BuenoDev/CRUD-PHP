<?php 
//Criar as credenciais pra conexao com o banco de dados 
$server = 'localhost'; 
$usuario = 'root';
$senha = '';
$db = 'etapa1';

//Criar conexao
$conexao = mysqli_connect($server, $usuario, $senha, $db);

if (!$conexao)
    die('Erro: Nao foi possivel conectar ao banco de dados '); 



?>
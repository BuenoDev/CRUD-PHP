<?php 
include_once "config.php"; 

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM cliente WHERE id = '$id'"; 

$apaga = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao)) {
    header("Location: listar.php"); 
} else {
    echo 'Desculpe, não foi possível realizar a ação desejada';
}
?>
<?php 
session_start(); 
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>

<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>CPF</th>
    </thead>
    <tbody>
    <?php 
        $resultado_usuarios = "SELECT * FROM cliente"; 
        $sql = mysqli_query($conexao, $resultado_usuarios); 
        while ($linha = mysqli_fetch_assoc($sql)): ?> 
        <tr>
            <td><?php echo $linha['id'] ?> </td>
            <td><?php echo $linha['nome'] ?> </td>
            <td><?php echo $linha['email'] ?> </td>
            <td><?php echo $linha['endereco'] ?> </td>
            <td><?php echo $linha['cpf'] ?> </td>
            <td> <a class="btn btn-primary" href = "edit_cliente.php?id= <?php echo $linha['id'] ?>" role="button"> Editar </button> </td>
            <td> <a class="btn btn-danger" href="delete.php?id= <?php echo $linha['id'] ?>" role="button"> Deletar </button> </td>
        </tr>
        <?php endwhile ?>


    <?php /*
        $resultado_usuarios = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao, $resultado_usuarios); 
        while ($linha_usuario = mysqli_fetch_assoc($resultado)) {
            echo '<tr>'; 
            echo '<td>' .$linha_usuario['id']. '</td>';
            echo '<td>' .$linha_usuario['nome']. '</td>'; 
            echo '<td>' .$linha_usuario['email']. '</td>';
            echo '<td>' .$linha_usuario['endereco']. '</td>'; 
            echo '<td>' .$linha_usuario['cpf']. '</td>';
            echo '<td> <a class="btn btn-primary" href = "edit_cliente.php?id=" role="button"> Editar </button> </td>';
            echo '<td> <a class="btn btn-danger" href="" role="button"> Deletar </button> </td>';
            echo '</tr>';
        } */
    ?>
        
    </tbody>
</table>    
</body>
</html>
<?php 
include_once "config.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$resultado_cliente = "SELECT * FROM cliente WHERE id = '$id'"; 
$resultado_query = mysqli_query($conexao, $resultado_cliente); 
$linha_cliente = mysqli_fetch_assoc($resultado_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>

<form action="processa_edit.php" method="POST">
  <input type="hidden" name="id" value = <?php echo $linha_cliente['id']; ?> />
  <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" value=<?php echo $linha_cliente['nome']; ?> />
  </div>

  <div class="form-group">
    <label for="cep">Codigo postal</label>
    <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP" value=<?php echo $linha_cliente['cep']; ?> />
  </div>

  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input name ="endereco" type="text" class="form-control" id="endereco" placeholder="endereco" value=<?php echo $linha_cliente['endereco']; ?> />
  </div>


  <div class="form-group">
    <label for="numero">Numero</label>
    <input name="numero" type="text" class="form-control" id="numero" placeholder="numero" value=<?php echo $linha_cliente['numero']; ?> />
  </div>

  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Bairro" value=<?php echo $linha_cliente['bairro']; ?> />
  </div> 

  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade" value=<?php echo $linha_cliente['cidade']; ?> />
  </div>

  <div class="form-group">
    <label for="UF">UF</label>
    <input name="uf" type="text" class="form-control" id="UF" placeholder="UF" value=<?php echo $linha_cliente['uf']; ?> />
  </div>
 

  <div class="form-group">
    <label for="email">E-mail</label> 
    <input name="email" type="email" class="form-control" id="email" placeholder="e-mail" value=<?php echo $linha_cliente['email']; ?> />
  </div>

  <div class="form-group"> 
    <label for="cpf">CPF</label> 
    <input name="cpf" type="text" class="form-control" id="cep" placeholder="cpf" value=<?php echo $linha_cliente['cpf']; ?> />
  </div>


  <button type="submit" class="btn btn-primary">Editar</button> 
</form>
    
</body>
</html>
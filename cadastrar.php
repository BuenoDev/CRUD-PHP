<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<form action="create.php" method="POST">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="cep">Codigo postal</label>
    <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP">
  </div>

  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input name ="endereco" type="text" class="form-control" id="endereco" placeholder="endereco">
  </div>


  <div class="form-group">
    <label for="numero">Numero</label>
    <input name="numero" type="text" class="form-control" id="numero" placeholder="numero">
  </div>

  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Bairro">
  </div> 

  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade">
  </div>

  <div class="form-group">
    <label for="UF">UF</label>
    <input name="uf" type="text" class="form-control" id="UF" placeholder="UF">
  </div>
 

  <div class="form-group">
    <label for="email">E-mail</label> 
    <input name="email" type="email" class="form-control" id="email" placeholder="e-mail">
  </div>

  <div class="form-group"> 
    <label for="cpf">CPF</label> 
    <input name="cpf" type="text" class="form-control" id="cep" placeholder="cpf">
  </div>


  <button type="submit" class="btn btn-primary">Cadastrar</button> 
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
</head>
<body>

<?php

include "conexao.php";

$id = $_GET['id_autor'];

$query = " SELECT * FROM autores WHERE id_autor = '$id'";

$resultado = mysqli_query($connection, $query);

$linha = mysqli_fetch_assoc($resultado);

?>

<div class="container">

<h1>Editar Autores</h1>

<form class="row g-3" action="editar_autores_script.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $linha['email']?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']?>">
  </div>

  <div class="col-12">
    <input type="hidden" name="id_autor" value="<?php echo $linha['id_autor']?>">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-success"  id="editar" value="Esta acao nao poderá ser desfeita!">Editar</button>
  </div>

  <div class="col-12">
    <a href="listar_autores.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>
</form>

</div>

<script>

var botaoClicado = function(){
  alert(editar.value);
}

var botaoEditar = document.getElementById('editar');
botaoEditar.onclick = botaoClicado;

</script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>
</body>
</html>
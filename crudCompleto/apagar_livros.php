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

$id = $_GET['id_livro'];

$query = " SELECT * FROM livros WHERE id_livro = '$id'";

$resultado = mysqli_query($connection, $query);

$linha = mysqli_fetch_assoc($resultado);

?>

<div class="container">

<h1>Deletar Livros</h1>

<form class="row g-3" action="apagar_livros_script.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Título</label>
    <input type="text" class="form-control" name="titulo" value="<?php echo $linha['titulo'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Gênero</label>
    <input type="text" class="form-control" name="genero" value="<?php echo $linha['genero']?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Data de Publicacao</label>
    <input type="date" class="form-control" name="data_publicacao" value="<?php echo $linha['data_publicacao']?>">
  </div>

  <div class="col-12">
    <input type="hidden" name="id_livro" value="<?php echo $linha['id_livro']?>">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-danger">Apagar</button>
  </div>

  <div class="col-12">
    <a href="listar_livros.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>
</form>

</div>
    
</body>
</html>
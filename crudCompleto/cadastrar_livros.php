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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar_autores.php">Cadastrar Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar_livros.php">Cadastrar Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Cadastrar Livros</h1>


<form class="row g-3" action="cadastrar_livros_script.php"  method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Título</label>
    <input type="text" class="form-control" name="titulo">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Gênero</label>
    <input type="text" class="form-control" name="genero">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Data de Publicacao</label>
    <input type="date" class="form-control" name="data_publicacao">
  </div>
  
  <div class="col-md-6">

  <label for="autores">Selecione um(a) Autor(a):</label>
  <select name="autores" name="autores">

  <?php

include "conexao.php";
include "mensagem.php";

$query = " SELECT * FROM autores";

$resultado = mysqli_query($connection, $query);

   while($linha = mysqli_fetch_assoc($resultado)){
        $id = $linha['id_autor'];
        $nome = $linha['nome'];


        var_dump($id);
        
       
       echo "<option value='". $id ."'>" .$nome. "</option>";
   }

  ?>
    
  </select>
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-success">Salvar</button>
  </div>

  <div class="col-12">
    <a href="listar_livros.php" button type="submit" class="btn btn-primary">Listar</button></a>
  </div>

  <div class="col-12">
    <a href="index.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>
</form>

</div>
    
    
</body>
</html>



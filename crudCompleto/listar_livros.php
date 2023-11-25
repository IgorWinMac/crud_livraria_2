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

<h1>Lista de Livros</h1>

<div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Buscar</button>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Genero</th>
      <th scope="col">Autor(a)</th>
      <th scope="col">Data de Publicacao</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody> 

  <?php

  include "conexao.php";

$query = "SELECT id_livro ,titulo, genero, data_publicacao, nome FROM livros inner join autores on livros.id_autor = autores.id_autor;";

$lista = mysqli_query($connection, $query);

while($data = mysqli_fetch_assoc($lista)){

    $id = $data['id_livro'];
    $titulo = $data['titulo'];
    $genero = $data['genero'];
    $autor = $data['nome'];
    $data_publicacao = $data['data_publicacao']; 

    echo "<tr>
        <td>$titulo</td>
        <td>$genero</td>
        <td>$autor</td>
        <td>$data_publicacao</td>
        <td><a href='editar_livros.php?id_livro=$id'><button>Editar</button></a></td>
        <td><a href='apagar_livros.php?id_livro=$id'><button>Apagar</button></a></td>
    </tr>";
}

  ?>
 
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

<div class="col-12">
    <a href="cadastrar_livros.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>

</div>
    
</body>
</html>
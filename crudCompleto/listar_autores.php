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

<h1>Lista de Autores</h1>

<form action="buscar.php" method="POST">
<div class="input-group">
  <input type="search" class="form-control rounded"  id="pesquisa" name="pesquisar" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button onclick="searchData()" class="btn btn-primary" <ion-icon name="search-outline">Buscar</ion-icon>
</div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody> 

  <?php

  include "conexao.php";

$query = " SELECT * FROM autores";

$lista = mysqli_query($connection, $query);

while($data = mysqli_fetch_assoc($lista)){

    $id = $data['id_autor'];
    $nome = $data['nome'];
    $email = $data['email'];
    $data_nascimento = $data['data_nascimento'];

    echo "<tr>
        <td>$nome</td>
        <td>$email</td>
        <td>$data_nascimento</td>
        <td><a href='editar_autores.php?id_autor=$id'><button>Editar</button></a></td>
        <td><a href='apagar_autores.php?id_autor=$id'><button>Apagar</button></a></td>
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
    <a href="cadastrar_autores.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>

</div>

<script>
  var search = document.getElementById('pesquisa');

  search.addEventListener("keydown", function(event)){
    if (event.key === "Enter" )
    { 
        searchData();
    }
  });

  function searchData()
  {
      window.locate = 'buscar.php?search='+search.value;
  }
</script>
    
</body>
</html>
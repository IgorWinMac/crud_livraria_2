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
include "mensagem.php";

$id = $_POST['id_livro'];

$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$data_publicacao = $_POST['data_publicacao'];

$query = " UPDATE livros SET titulo = '$titulo', genero = '$genero', data_publicacao = '$data_publicacao' WHERE id_livro = $id";

if(mysqli_query($connection, $query)){
    handleMessage('success',"Dados editados com sucesso!");
}else{
    handleMessage('danger',"Dados nao foram editados!");
}

?>

<div class="col-12">
    <a href="listar_livros.php" button type="submit" class="btn btn-primary">Voltar</button></a>
  </div>
    
</body>
</html>
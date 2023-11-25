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

$id = $_POST['autores'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$data_publicacao = $_POST['data_publicacao'];

$query = " INSERT INTO `livros` (`id_autor`,`titulo`,`genero`,`data_publicacao`) VALUES ('$id','$titulo','$genero','$data_publicacao')";

if(mysqli_query($connection, $query)){
    handleMessage('success',"Dados salvos com sucesso!");
}else{
    handleMessage('danger',"Dados nao foram salvos!");
}

?>
    
</body>
</html>
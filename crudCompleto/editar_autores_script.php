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

$id = $_POST['id_autor'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$query = " UPDATE autores SET nome = '$nome', email = '$email', data_nascimento = '$data_nascimento' WHERE id_autor = $id";

if(mysqli_query($connection, $query)){
    handleMessage('success',"Dados editados com sucesso!");
}else{
    handleMessage('danger',"Dados nao foram editados!");
}

?>
    
</body>
</html>
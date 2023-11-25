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

    <h1>Resultado da Busca</h1>

        <?php

        include "conexao.php";

        if(isset($_POST['pesquisar'])){
            $pesquisar = $_POST['pesquisar'];
        }else{
            $pesquisar = "";
        }

        $query = "SELECT * FROM autores WHERE autores.nome LIKE '%$pesquisar%'";

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

        <div class="col-12">
            <a href="listar_autores.php" button type="submit" class="btn btn-primary">Voltar</button></a>
        </div>

</div>
    
</body>
</html>
<?php
include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="cadastrocidade.css">
</head>
<body>
  <div class="container">
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        echo "<h1>Dados do Cliente</h1>";
        echo "Nome da Cidade: $nome<br>";
        echo "Estado: $estado<br>";
        
        $sql =  "INSERT INTO Cidade (nome,estado)";
        $sql .= " VALUES ('".$nome."','".$estado."')";
        echo "<p>" . $sql . "</p>";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados Cadastrados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar</h2>";
            echo "<p>" . mysqli_error($con) . "</p>";
        }
    ?>
    <button class="btn"><a href="./index.php">Voltar</a></button>
  </div>
</body>
</html>

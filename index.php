<?php
include 'conn.php';

$sql = "SELECT * From Bandas";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Data cadastro</th>
        </thead>
        <?php while($dados = $result->fetch_assoc()){ ?>
        <tbody>
            <td><?php echo "<a href='http://20.20.0.253/projPHP/projeto-php/alterar.php'>Alterar</a>";?></td>
            <td><?php echo "<a href='http://20.20.0.253/projPHP/projeto-php/excluir.php'>Excluir</a>";?></td>
        </tbody>
        <?php } ?>
    </table>    

</body>
</html>

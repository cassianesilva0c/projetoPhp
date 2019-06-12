<?php

include 'conn.php';
$id = $_GET['id'];
$sql = "SELECT NOME_BANDAS from 
BANDAS where ID_BANDAS = $Id";

$result = $conn->query($sql);
$dados = $result->fetch_assoc();
$nome = $dados['NOME_BANDAS'];

?>
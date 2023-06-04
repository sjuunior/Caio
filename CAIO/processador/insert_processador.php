<?php

require_once '../conn.php';
$ano_processador= filter_input(INPUT_POST, 'ano_processador');
$valor_processador = filter_input(INPUT_POST, 'valor_processador');

$stmt = $conn->prepare("INSERT INTO processador (anoprocessador, valorprocessador) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_processador);
$stmt->bindValue(':VALOR', $valor_processador);
$stmt->execute();
header("Location: index_processador.php");
?>
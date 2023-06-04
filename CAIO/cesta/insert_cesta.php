<?php

require_once '../conn.php';
$ano_cesta= filter_input(INPUT_POST, 'ano_cesta');
$valor_cesta = filter_input(INPUT_POST, 'valor_cesta');

$stmt = $conn->prepare("INSERT INTO cesta (anocesta, valorcesta) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_cesta);
$stmt->bindValue(':VALOR', $valor_cesta);
$stmt->execute();
header("Location: index_cesta.php");
?>
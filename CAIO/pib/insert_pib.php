<?php

require_once '../conn.php';
$ano_pib= filter_input(INPUT_POST, 'ano_pib');
$valor_pib = filter_input(INPUT_POST, 'valor_pib');

$stmt = $conn->prepare("INSERT INTO pib (anopib, valorpib) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_pib);
$stmt->bindValue(':VALOR', $valor_pib);
$stmt->execute();
header("Location: index_pib.php");
?>
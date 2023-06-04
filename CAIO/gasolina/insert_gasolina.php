<?php

require_once '../conn.php';
$ano_gasolina= filter_input(INPUT_POST, 'ano_gasolina');
$valor_gasolina = filter_input(INPUT_POST, 'valor_gasolina');

$stmt = $conn->prepare("INSERT INTO gasolina (anogasolina, valorgasolina) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_gasolina);
$stmt->bindValue(':VALOR', $valor_gasolina);
$stmt->execute();
header("Location: index_gasolina.php");
?>
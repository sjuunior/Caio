<?php

require_once '../conn.php';
$id_gasolina = filter_input(INPUT_POST,'id_gasolina');
$ano_gasolina= filter_input(INPUT_POST, 'ano_gasolina');
$valor_gasolina = filter_input(INPUT_POST, 'valor_gasolina');


$stmt = $conn->prepare("UPDATE gasolina SET anogasolina = :ANO, valorgasolina = :VALOR WHERE idgasolina = :ID");


$stmt->bindValue(':ID', $id_gasolina);
$stmt->bindValue(':ANO', $ano_gasolina);
$stmt->bindValue(':VALOR', $valor_gasolina);
$stmt->execute();

header("Location: index_gasolina.php");
?>
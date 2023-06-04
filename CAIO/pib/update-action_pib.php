<?php

require_once '../conn.php';
$id_pib = filter_input(INPUT_POST,'id_pib');
$ano_pib= filter_input(INPUT_POST, 'ano_pib');
$valor_pib = filter_input(INPUT_POST, 'valor_pib');


$stmt = $conn->prepare("UPDATE pib SET anopib = :ANO, valorpib = :VALOR WHERE idpib = :ID");


$stmt->bindValue(':ID', $id_pib);
$stmt->bindValue(':ANO', $ano_pib);
$stmt->bindValue(':VALOR', $valor_pib);
$stmt->execute();

header("Location: index_pib.php");
?>
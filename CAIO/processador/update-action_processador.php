<?php

require_once '../conn.php';
$id_processador = filter_input(INPUT_POST,'id_processador');
$ano_processador= filter_input(INPUT_POST, 'ano_processador');
$valor_processador = filter_input(INPUT_POST, 'valor_processador');


$stmt = $conn->prepare("UPDATE processador SET anoprocessador = :ANO, valorprocessador = :VALOR WHERE idprocessador = :ID");


$stmt->bindValue(':ID', $id_processador);
$stmt->bindValue(':ANO', $ano_processador);
$stmt->bindValue(':VALOR', $valor_processador);
$stmt->execute();

header("Location: index_processador.php");
?>
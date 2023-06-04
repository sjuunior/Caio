<?php

require_once '../conn.php';
$id_dolar = filter_input(INPUT_POST,'id_dolar');
$ano_dolar = filter_input(INPUT_POST, 'ano_dolar');
$valor_dolar = filter_input(INPUT_POST, 'valor_dolar');


$stmt = $conn->prepare("UPDATE dolar SET anodolar = :ANO, valordolar = :VALOR WHERE iddolar = :ID");


$stmt->bindValue(':ID', $id_dolar);
$stmt->bindValue(':ANO', $ano_dolar);
$stmt->bindValue(':VALOR', $valor_dolar);
$stmt->execute();

header("Location: index_dolar.php");
?>
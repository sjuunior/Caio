<?php

require_once '../conn.php';
$ano_dolar= filter_input(INPUT_POST, 'ano_dolar');
$valor_dolar = filter_input(INPUT_POST, 'valor_dolar');

$stmt = $conn->prepare("INSERT INTO dolar (anodolar, valordolar) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_dolar);
$stmt->bindValue(':VALOR', $valor_dolar);
$stmt->execute();
header("Location: index_dolar.php");
?>
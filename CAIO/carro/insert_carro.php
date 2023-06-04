<?php

require_once '../conn.php';
$ano_carro= filter_input(INPUT_POST, 'ano_carro');
$valor_carro = filter_input(INPUT_POST, 'valor_carro');

$stmt = $conn->prepare("INSERT INTO carro (anocarro, valorcarro) VALUES(:ANO, :VALOR)");
$stmt->bindValue(':ANO', $ano_carro);
$stmt->bindValue(':VALOR', $valor_carro);
$stmt->execute();
header("Location: index_carro.php");
?>


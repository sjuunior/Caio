<?php

require_once '../conn.php';
$id_carro = filter_input(INPUT_POST,'id_carro');
$ano_carro= filter_input(INPUT_POST, 'ano_carro');
$valor_carro = filter_input(INPUT_POST, 'valor_carro');


$stmt = $conn->prepare("UPDATE carro SET anocarro = :ANO, valorcarro = :VALOR WHERE idcarro = :ID");


$stmt->bindValue(':ID', $id_carro);
$stmt->bindValue(':ANO', $ano_carro);
$stmt->bindValue(':VALOR', $valor_carro);
$stmt->execute();

header("Location: index_carro.php");
?>
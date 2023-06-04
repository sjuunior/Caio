<?php 
require_once '../conn.php';

$id_carro = filter_input(INPUT_GET, 'idcarro');

if($id_carro){
    $stmt = $conn->prepare("DELETE FROM carro WHERE idcarro = :ID");

    $stmt->bindValue(':ID', $id_carro);

    $stmt->execute();

    header("Location: index_carro.php");
}

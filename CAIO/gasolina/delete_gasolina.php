<?php 
require_once '../conn.php';

$id_gasolina = filter_input(INPUT_GET, 'idgasolina');

if($id_gasolina){
    $stmt = $conn->prepare("DELETE FROM gasolina WHERE idgasolina = :ID");

    $stmt->bindValue(':ID', $id_gasolina);

    $stmt->execute();

    header("Location: index_gasolina.php");
}
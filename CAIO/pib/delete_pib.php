<?php 
require_once '../conn.php';

$id_pib = filter_input(INPUT_GET, 'idpib');

if($id_pib){
    $stmt = $conn->prepare("DELETE FROM pib WHERE idpib = :ID");

    $stmt->bindValue(':ID', $id_pib);

    $stmt->execute();

    header("Location: index_pib.php");
}
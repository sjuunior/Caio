<?php 
require_once '../conn.php';

$id_cesta = filter_input(INPUT_GET, 'idcesta');

if($id_cesta){
    $stmt = $conn->prepare("DELETE FROM cesta WHERE idcesta = :ID");

    $stmt->bindValue(':ID', $id_cesta);

    $stmt->execute();

    header("Location: index_cesta.php");
}
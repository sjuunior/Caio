<?php 
require_once '../conn.php';

$id_dolar = filter_input(INPUT_GET, 'iddolar');

if($id_dolar){
    $stmt = $conn->prepare("DELETE FROM dolar WHERE iddolar = :ID");

    $stmt->bindValue(':ID', $id_dolar);

    $stmt->execute();

    header("Location: index_dolar.php");
}
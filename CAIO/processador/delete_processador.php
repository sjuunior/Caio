<?php 
require_once '../conn.php';

$id_processador = filter_input(INPUT_GET, 'idprocessador');

if($id_processador){
    $stmt = $conn->prepare("DELETE FROM processador WHERE idprocessador = :ID");

    $stmt->bindValue(':ID', $id_processador);

    $stmt->execute();

    header("Location: index_processador.php");
}
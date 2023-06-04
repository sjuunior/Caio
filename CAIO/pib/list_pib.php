<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM pib");
$stmt->execute();
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Ano</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <?php foreach ($list as $gasolina): ?>
    <tbody>
      <tr>
        <td><?= $gasolina['idpib']; ?></td>
        <td><?= $gasolina['anopib']; ?></td>
        <td><?= $gasolina['valorpib']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_pib.php?idpib=<?= $gasolina['idpib']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_pib.php?idpib=<?= $gasolina['idpib']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>
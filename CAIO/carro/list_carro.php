<?php
require_once '../conn.php';

$stmt = $conn->prepare("SELECT * FROM carro");
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
        <td><?= $gasolina['idcarro']; ?></td>
        <td><?= $gasolina['anocarro']; ?></td>
        <td><?= $gasolina['valorcarro']; ?></td> 
        <!-- delete e update -->
        <td>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="update_carro.php?idcarro=<?= $gasolina['idcarro']; ?>">Editar </a>
            <a class="btn btn-dark" style="background-color: #7d677e;" href="delete_carro.php?idcarro=<?= $gasolina['idcarro']; ?>">Deletar </a>
        </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>
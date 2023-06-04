<?php
require_once '../conn.php';

$id_cesta = filter_input(INPUT_GET, 'idcesta');

$stmt = $conn->prepare("SELECT * FROM cesta WHERE idcesta = :ID");

$stmt->bindValue(':ID', $id_cesta);

$stmt->execute();

$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_cesta.php" method="POST">
  <input type="hidden" name=id_cesta value="<?= $item['idcesta'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_cesta" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_cesta" id="ano_cesta" value="<?= $item['anocesta'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_cesta" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_cesta" id="valor_cesta" value="<?= $item['valorcesta'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
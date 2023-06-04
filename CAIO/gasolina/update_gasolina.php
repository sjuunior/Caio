<?php
require_once '../conn.php';

$id_gasolina = filter_input(INPUT_GET, 'idgasolina');

$stmt = $conn->prepare("SELECT * FROM gasolina WHERE idgasolina = :ID");

$stmt->bindValue(':ID', $id_gasolina);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_gasolina.php" method="POST">
  <input type="hidden" name=id_gasolina value="<?= $gasolina['idgasolina'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_gasolina" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_gasolina" id="ano_gasolina" value="<?= $gasolina['anogasolina'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_gasolina" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_gasolina" id="valor_gasolina" value="<?= $gasolina['valorgasolina'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
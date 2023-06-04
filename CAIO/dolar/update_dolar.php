<?php
require_once '../conn.php';

$id_dolar = filter_input(INPUT_GET, 'iddolar');

$stmt = $conn->prepare("SELECT * FROM dolar WHERE iddolar = :ID");

$stmt->bindValue(':ID', $id_dolar);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_dolar.php" method="POST">
  <input type="hidden" name=id_dolar value="<?= $gasolina['iddolar'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_dolar" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_dolar" id="ano_dolar" value="<?= $gasolina['anodolar'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_dolar" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_dolar" id="valor_dolar" value="<?= $gasolina['valordolar'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
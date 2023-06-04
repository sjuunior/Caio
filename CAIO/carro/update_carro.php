<?php
require_once '../conn.php';

$id_carro = filter_input(INPUT_GET, 'idcarro');

$stmt = $conn->prepare("SELECT * FROM carro WHERE idcarro = :ID");

$stmt->bindValue(':ID', $id_carro);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_carro.php" method="POST">
  <input type="hidden" name=id_carro value="<?= $gasolina['idcarro'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_carro" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_carro" id="ano_carro" value="<?= $gasolina['anocarro'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_carro" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_carro" id="valor_carro" value="<?= $gasolina['valorcarro'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
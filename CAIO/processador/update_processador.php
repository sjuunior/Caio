<?php
require_once '../conn.php';

$id_marcio = filter_input(INPUT_GET, 'idprocessador');

$stmt = $conn->prepare("SELECT * FROM processador WHERE idprocessador = :ID");

$stmt->bindValue(':ID', $id_marcio);

$stmt->execute();

$gasolina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br>
<form action="update-action_processador.php" method="POST">
  <input type="hidden" name=id_processador value="<?= $gasolina['idprocessador'];?>" readonly>
  <div class="mb-3 container">
    <label for="ano_processador" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_processador" id="ano_processador" value="<?= $gasolina['anoprocessador'];?>">
  </div>
  <div class="mb-3 container">
    <label for="valor_processador" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_processador" id="valor_processador" value="<?= $gasolina['valorprocessador'];?>">
  </div>
  <div class="container">
    <button type="submit" style="background-color: #7d677e;" class="btn btn-dark">Atualizar</button>
</div>
</form>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
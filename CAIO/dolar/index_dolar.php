<?php
include_once "../sidebar.php";
?>
<br>
<form action="insert_dolar.php" method="post">
  <div class="mb-3 container">
    <label for="ano_dolar" class="form-label">Ano:</label>
    <input type="text" class="form-control" name="ano_dolar" id="ano_dolar">
  </div>
  <div class="mb-3 container">
    <label for="valor_dolar" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor_dolar" id="valor_dolar">
  </div>
  <div class="container">
  <button type="submit" class="btn btn-dark"style="background-color: #7d677e;" >Inserir</button>
</div>
</form>
<br>
<?php
include "list_dolar.php";
?>
<br>
<!-- start google charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Valor'],
        <?php
        require_once '../conn.php';

        $stmt = $conn->prepare("SELECT * FROM dolar");
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($list as $item):

        ?>
        
          ['<?= $item['anodolar']; ?>',  <?= $item['valordolar'];?>],

        <?php endforeach; ?>
        ]);

          var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <div class="container" id="curve_chart" style="width: 900px; height: 500px"></div>
<!-- end google charts -->
      </div>
    </div>
</div>
<!-- end side bar-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
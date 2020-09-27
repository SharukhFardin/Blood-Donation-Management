<?php
  require 'connect.php';
?>


<html>
  <head>
  <style>
  .center {
    margin: auto;
    width: 60%;
    padding: 10px;
  }
  </style>
  <div class="center">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['blood_group', 'quantity'],
         <?php
         $sql = "SELECT * FROM blood_information";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['blood_group']."',".$result['quantity']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Availablity of blood groups'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
  </div>
</html>
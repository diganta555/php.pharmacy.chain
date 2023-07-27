<?php 
require 'config.php';

?>
<html>
    <head>
        <title>Graphical Representation</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date','Sale'],
          <?php
          if(isset($_POST['submit']))
          {
          $type=$_POST['type'];
          $sql="SELECT s_date,SUM(Total) as Total from customer_details where Outlet={$type} GROUP BY s_date ORDER BY s_date ASC ";
          $result=$conn->query($sql);
        while($row = $result->fetch_assoc()){
            $Total=$row['Total'];
            $s_date=$row['s_date'];
            
           
            ?>
            ['<?php echo $s_date;?>',<?php echo $Total;?>],
            <?php

        } }

          ?>
         
        ]);

        var options = {
          width: 600,
          
          chart: {
            title: 'Daily Sales Performance',
          },
          bars: 'Verctical' ,// Required for Material Bar Charts.
          
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Sales Report</div>
        <hr>
<div class="report">
<form method="POST" action="report_bar_db.php" class="head">
    <label for="type" >Display Sales For Outlet :</label>
    <select name="type">
    <option disabled selected>Choose Outlet</option>
        <option value="1">Saltlake</option>
        <option value="2">Santragachi</option>
        <option value="3">Rajarhat</option>
        <option value="4">Konnagar</option>
    </select>
    <input type="submit" name="submit" class="search" value="Search">
 </form> 
</div>
<div id="barchart_material" class="bar"></div>
<div class="back">
    <a href="Dashboard_admin.php"><button class="openButton" >Back</button></a>
    </div>
</div>
</body>
</html>
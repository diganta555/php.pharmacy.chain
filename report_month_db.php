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
          ['MONTH','sales',],
          <?php
         
          
      //$sql="SELECT s_date,SUM(Total) as Total from customer_details where Outlet ='1' GROUP BY s_date  ";  
      
    //   $sql="SELECT year(s_date),month(s_date),SUM(Total)
    //  from customer_details  where Outlet ='1'
    //  GROUP BY year(s_date),month(s_date)
    // ORDER BY year(s_date),month(s_date)";
    if(isset($_POST['submit']))
    {
    $type=$_POST['type'];

    $sql="SELECT YEAR(s_date) AS Year, 
    MONTHNAME(s_date) AS s_date, SUM(Total)      
    AS Total FROM customer_details where Outlet={$type}   
    GROUP BY YEAR(s_date), MONTH(s_date)" ;

// $sql=" SELECT YEAR(s_date) AS Year, DATENAME(MONTH, s_date) 
// AS s_date, SUM(Total)     
//      AS Total FROM customer_details where Outlet ='1'
//   GROUP BY YEAR(s_date), DATENAME(MONTH, s_date)";

    // $sql ="SELECT year(s_date),month(s_date),count(Total)
    //  from customer_details where Outlet='1'
    //  GROUP BY year(s_date),month(s_date)
    //  ORDER BY year(s_date),month(s_date)";
    

      $result=$conn->query($sql);
        while($row = $result->fetch_assoc()){
            
            $s_date=$row['s_date'];
            $Total=$row['Total'];
           
            ?>
            ['<?php echo $s_date;?>',<?php echo $Total;?>],
            <?php

        } }

          ?>
         
        ]);

        var options = {
          chart: {
            title: ' Sales Performance',
            // subtitle: 'Sales: Date',
          },
          bars: 'Verctical' // Required for Material Bar Charts.
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
<form method="POST" action="report_month_db.php" class="head">
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
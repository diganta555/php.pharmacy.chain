<?php session_start(); ?>
<?php 
    require 'config.php';
    //$id=$_GET['id'];
    $sql="SELECT * from users ";
    // $sql="SELECT * from users where id='$id'";
    $result=$conn->query($sql);
    if(!isset($_SESSION['Pharmacy_Id']) && empty($_SESSION['Pharmacy_Id'])){
    $parameter = $_SERVER['QUERY_STRING'];
    parse_str($parameter, $get_array);
    $Pharmacy_Id=$get_array['Pharmacy_Id'];
    $_SESSION['Pharmacy_Id'] =$Pharmacy_Id;
    }
    $Pharmacy_Id=$_SESSION['Pharmacy_Id']; 
    //echo $Pharmacy_Id;
?>
<html>
    <head>
        <title>Login</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    $sql="SELECT YEAR(s_date) AS Year, 
    MONTHNAME(s_date) AS s_date, SUM(Total)      
    AS Total FROM customer_details where Outlet='$Pharmacy_Id'   
    GROUP BY YEAR(s_date), MONTH(s_date)" ;  

      $result=$conn->query($sql);
        while($row = $result->fetch_assoc()){
            
            $s_date=$row['s_date'];
            $Total=$row['Total'];
           
            ?>
            ['<?php echo $s_date;?>',<?php echo $Total;?>],
            <?php

        } 

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
				<?php require 'navbar_pharmacist.php' ;?>
    </div>
    <div class="bodyspace">
    <font size = 4 color="black"><center>
            <div class="head">Monthly Sales Report</div>
            <hr>
            
        <div id="barchart_material" class="bar"></div>
        <div class="back">
    <a href="Dashboard_pharmacist.php"><button class="openButton" >Back</button></a>
    </div>
    </div>
    </body>
</html>
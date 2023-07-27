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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
    <!-- <script type="text/javascript">
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
    </script> -->
    </head>
    <body>
    <div>
				<?php require 'navbar_pharmacist.php' ;?>
    </div>
    <div class="bodyspace">
    <font size = 4 color="black"><center>
            <div class="head">Pharmacist Dashboard</div>
            <div class="head2">
              <button type="button" class="icon-button" onclick="openForm()">
                <span class="material-icons">notifications</span>
                <span class="icon-button__badge">2</span>
              </button>
              <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form method="POST" class="formContainer">
        <div class="head">Out of Stock Notification</div>
        <?php 
        require 'config.php';
        $sql="SELECT * from purchase where Pharmacy_Loc in (select Location from pharmacy where Quantity<'10' and Pharmacy_Id={$Pharmacy_Id} ) order by Pharmacy_Loc";
        $result=$conn->query($sql);
        ?>
        <div>
        <table>
        <tr>
        <th>Medicine Name</th>
        <th>Available Quantity</th>
        <th>Batch Id</th>
        </tr>
        <?php 
            if($result->num_rows > 0 ){
                while($rows = $result->fetch_assoc()) {
                
                ?>
            <tr>
        <td><?php echo $rows['Med_name']; ?></td>
        <td><?php echo $rows['Quantity']; ?></td>
        <td><?php echo $rows['Batch_Id']; ?></td>
        </tr>
        <?php
            } 
            ?>
            <?php }else {
              echo "No Medicine Out of Stock";
            }?>
      </table>
      
          </div>
        <br>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
            </div>
            </div>
            <hr>
            <div class="flex-container" style="margin-left:100px;">
            <div class="box2">
                <?php
                  $sql="SELECT COUNT(C_name) as Total FROM customer_details where Outlet={$Pharmacy_Id} "; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo $row["Total"];
                  }  
                ?>
                <br>Total Customers
            </div>
            <div class="box2">
                <?php
                  $sql="SELECT COUNT(Med_name) as Total FROM purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} ) order by Pharmacy_Loc ";
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo $row["Total"];
                  }  
                ?>
                <br>Total Medicines</div>
            <div class="box2">
            <?php
                  $sql="SELECT SUM(Total) as G_Total from customer_details where s_date=CURDATE() and Outlet={$Pharmacy_Id}"; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo "Rs ".$row["G_Total"];
                  }  
                ?>
                <br>Today's Total Sales</div>
                <div class="box2">
                <a href="pharmacist_daily_report.php">  Check
                <br>Daily Sales Report</a></div>
            </div>
            <!-- <div id="barchart_material" class="bar"></div> -->
            <hr>
            <div class="flex-container">
            <div class="box" style="background-image:url('image/medicine.jpg');"><span><a href="add_sales.php">Add Sales Record</a></span></div>
            <div class="box" style="background-image:url('image/supplier1.jpg');"><span><a href="pharmacist_daily_bar.php">Daily Sales Representation</span></a></div>
            <div class="box" style="background-image:url('image/graphimg.jpg');"><span><a href="pharmacist_month_bar.php">Monthly Sales Representation</a></span></div>
        </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
    </body>
</html>
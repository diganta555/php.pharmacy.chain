
<?php 
    require 'config.php';
    
?>
<html>
    <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
<body>
<div class="sidenav">
    <div>
        <img src="image/prof.jpg">
    </div>
    <div class="name">
        
    <!-- <?php 
            if($result->num_rows == 1){
                $rows = $result->fetch_assoc();
            
                ?>
            <?php echo $rows['Name']; ?>
            <?php
            }
            ?> -->
    </div>
    <div class="navname">Pharmacist</div>
    <hr><br>
    <div>
        <a href="Dashboard_pharmacist.php">Dashboard</a>
        <a href="add_sales.php">Add Sales Record</a>
        <a href="report_pharmacist.php">Detailed Sales Report</a>
        <a href="medicine_pharmacist.php">Avaliable Medicine List</a>        
        <a href="logout.php">Logout</a>
        <hr>
    </div>
</div>
</body>
</html>


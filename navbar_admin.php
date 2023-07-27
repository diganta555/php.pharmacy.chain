
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
    <div class="navname">Admin</div>
<hr><br>
    <div>
        <a href="Dashboard_admin.php">Dashboard</a>
        <a href="add_purchase.php">Add New Medicine</a>
        <!-- <a href="add_excel.php">Add Purchase By Excel Sheet</a> -->
        <a href="supplier.php">Supplier List</a> 
        <!-- <a href="employee.php">Employee List</a> -->
        <a href="medicine_admin.php">Avaliable Medicine List</a>
        <a href="report_admin.php">Detailed Sales Reports</a> 
        <a href="logout.php">Logout</a>
        <hr>
    </div>
</div>
</body>
</html>


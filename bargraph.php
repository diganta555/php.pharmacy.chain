

<?php session_start();
 require 'config.php';
?>
<html>
  <head>
  <title>Graphical Representation</title>
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div>
				<!-- navbar -->
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
    </div>
    </body>
</html>

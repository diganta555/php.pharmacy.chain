


<html>
    <head>
        <title>Report</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Sales Details with bar graph</div>
        <hr>
<div class="report">
<form method="POST" action="barchart.php" class="head">
    <label for="type" >Display Record For Outlet :</label>
    <select name="type">
        <option disabled selected>Choose Outlet</option>
        <option value="1">Saltlake</option>
        <option value="2">Santragachi</option>
        <option value="3">Rajarhat</option>
        <option value="4">Konnagar</option>
    </select>
    <input type="submit" name="submit" class="search" value="Search">
 </form>  
 <hr>
    </div>
</div>
</body>
</html>
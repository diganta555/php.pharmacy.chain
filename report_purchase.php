
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
        <div class="head">Summarized Purchase Report</div>
        <hr>
<div class="report">
<form method="POST" action="report_pur1.php" class="head">
    <label for="type" >Display Record For :</label>
    <input type="date" name="Date">
    <input type="submit" name="submit" class="search" value="Search">
 </form>  
 <hr>
 <form method="POST" action="report_pur2.php" >
		<label> Display Record From : </label> <input type="date" name="from">
		<label>To: </label><input type="date" name="to">
		<input type="submit" name="submit" class="search" value="Search">
	</form>
    </div>
</div>
</body>
</html>
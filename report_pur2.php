<?php 
require 'config.php';
$sno=0;
if(isset($_POST['submit']))
{

$from=date('Y-m-d',strtotime($_POST['from']));
$to=date('Y-m-d',strtotime($_POST['to']));
// echo $type;
$sql="SELECT T_Amount,Pharmacy_Loc from purchase WHERE Date between '$from' and '$to' GROUP BY Pharmacy_Loc";
$result=$conn->query($sql);


?>
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
        <div class="head">Purchase Details</div>
        <hr>
<div class="report">
<form method="POST" action="report_summary_db2.php" >
<label> Display Record From: </label><input type="date" name="from">
		<label>To: </label><input type="date" name="to">
		<input type="submit" name="submit" class="search" value="Search">
	</form>
 <hr>
<?php
    echo "<table align='center' width='50%' border=0 align='center' cellpadding='5px' >
    <tr bgcolor='#CCCCCC'>
    <th>Outlet</th>
    <th>Total Amount</th></tr>";
    $GrandTotal=0;
    while($row = $result->fetch_assoc()) {
       
        echo "<tr>
        <td>".$row["Pharmacy_Loc"]."</td>
        <td>Rs ".$row["T_Amount"]."</td></tr>";
        $GrandTotal +=$row['T_Amount'];
     }
       echo "</table>";
   }else {
    echo "No records Avaliable";
   }

?> 
<div class="report">
    <table>
        <?php 
        
        echo "<tr><th colspan='5'>Total Sales</th>
        <td> Rs ".$GrandTotal."</td><tr>"; ?>
	</table>
            </div>
</div>
<div><button class="openbutton"><a href="report_purchase.php">Back</a></button></div>
</div>
</body>
</html>
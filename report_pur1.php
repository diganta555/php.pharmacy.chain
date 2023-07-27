<?php 
require 'config.php';

if(isset($_POST['submit']))
{
$Date=date('Y-m-d',strtotime($_POST['Date']));
// echo $type;
$sql="SELECT T_Amount,Pharmacy_Loc from purchase WHERE Date='$Date' GROUP BY Pharmacy_Loc";
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
<form method="POST" action="report_pur1.php" class="head">
    <label for="type" >Display Record For Date :</label>
    <input type="date" name="Date">
    <input type="submit" name="submit" class="search" value="Search">
 </form> 
 <hr>
<?php
    echo "<table align='center' width='50%' border=0 align='center' cellpadding='5px' >
    <tr bgcolor='#CCCCCC'>
    <th>Outlet</th>
    <th>Total Amount</th></tr>";
    $GrandTotal=0;
    if($result->num_rows> 0 ){
    while($row = $result->fetch_array()) {
       
       echo "<tr>
       <td>".$row["Pharmacy_Loc"]."</td>
       <td>Rs ".$row["T_Amount"]."</td></tr>";
       $GrandTotal +=$row['T_Amount'];
     }
       echo "</table>";
   }else {
    echo "No records Avaliable";
   }
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
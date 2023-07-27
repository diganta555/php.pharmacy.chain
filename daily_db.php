<?php 
session_start();
require 'config.php';
$sno=0;
$Pharmacy_Id=$_SESSION['Pharmacy_Id'];  
echo $Pharmacy_Id;
if(isset($_POST['submit']))
{
$s_date=date('Y-m-d',strtotime($_POST['s_date']));
// echo $type;
$sql="SELECT customer_details.Total,customer_details.C_name from customer_details,pharmacy WHERE customer_details.Outlet=pharmacy.Pharmacy_Id and s_date='$s_date' and Pharmacy_Id={$Pharmacy_Id} ";
$result=$conn->query($sql);


?>
<html>
    <head>
        <title>Report</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_pharmacist.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Sales Details</div>
        <hr>
<div class="report">
<form method="POST" action="daily_db.php" class="head">
    <label for="type" >Display Record For Date :</label>
    <input type="date" name="s_date">
    <input type="submit" name="submit" class="search" value="Search">
 </form> 
 <hr>
<?php
    echo "<table align='center' width='50%' border=0 align='center' cellpadding='5px' >
    <tr bgcolor='#CCCCCC'>
    <th>Customer Name</th>
    <th>Total Amount</th></tr>";
    $GrandTotal=0;
    while($row = $result->fetch_assoc()) {
       
       echo "<tr>
       <td>".$row["C_name"]."</td>
       <td>Rs ".$row["Total"]."</td></tr>";
       $GrandTotal +=$row['Total'];
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
<div><button class="openbutton"><a href="pharmacist_daily_report.php">Back</a></button></div>
</div>
</body>
</html>
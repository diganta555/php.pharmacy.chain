<?php 
require 'config.php';
$sno=0;
if(isset($_POST['submit']))
{
$type=$_POST['type'];
// echo $type;
$sql="SELECT * from customer_details where Outlet={$type}";
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
        <div class="head">Sales Details</div>
        <hr>
<div class="report">
<form method="POST" action="report_db.php" class="head">
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
<?php
 if($result->num_rows > 0 ){
    echo "<table align='center' width='50%' border=0 align='center' cellpadding='5px' >
    <tr bgcolor='#CCCCCC'><th>Serial No</th>
    <th>Customer Name</th>
    <th>Customer Phone Number</th>
    <th>Purchase Date</th>
    <th>Total Amount</th></tr>";
    $GrandTotal=0;
    while($row = $result->fetch_assoc()) {
       
       echo "<tr>
       <td>".++$sno."</td>
       <td>".$row["C_name"]."</td>
       <td>".$row["C_phone"]."</td>
       <td>".$row["s_date"]."</td>
       <td>Rs ".$row["Total"]."</td></tr>";
       $GrandTotal +=$row['Total'];
     }
       echo "</table>";
   }else {
    echo "No records Avaliable";
   }
}
?> 
<div class="bill">
    <table>
        <?php 
        
        echo "<tr><th colspan='5'>Total Sales</th>
        <td> Rs ".$GrandTotal."</td><tr>"; ?>
	</table>
            </div>
</div>
</div>
</body>
</html>
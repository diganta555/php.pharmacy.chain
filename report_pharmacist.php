<?php 
        require 'config.php';
        session_start();
        $Pharmacy_Id=$_SESSION['Pharmacy_Id'];    
        //echo $Pharmacy_Id;
        $sql="SELECT * from customer_details where Outlet={$Pharmacy_Id}";
        $result=$conn->query($sql);
        $conn->close();
        $sno=0;
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
        <hr><div class="report">
        <table>
        <tr>
        <th>Serial No</th>
        <th>Customer Name</th>
        <th>Customer Phone No.</th>
        <th>Net Amount</th>
        <th>Purchase Date</th>
        <th>Details</th>
        </tr>
        <?php 
        $GrandTotal=0;
                
            while($rows=$result->fetch_assoc())
            {
                echo "<tr>
                <td>".++$sno."</td>
                <td> ".$rows["C_name"]."</td>
                <td> ".$rows["C_phone"]."</td>
                <td> Rs ".$rows["Total"]."</td>
                <td>".$rows["s_date"]."</td>
                <td><a href=\"view_bill.php?C_id=$rows[C_id]\"><button class=\"view\">View Bill</button></a></td>
			          </tr>";
            $GrandTotal +=$rows['Total'];
              }
                echo "</table>";
            ?>
    </table>
    <div class="bill">
    <table>
        <?php 
        
        echo "<tr><th colspan='5'>Grand Total</th>
        <td> Rs ".$GrandTotal."</td><tr>"; ?>
	</table>
            </div>
</div>
       
</div>
</body>
</html>
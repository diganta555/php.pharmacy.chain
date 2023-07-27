<?php 
        require 'config.php';
        session_start();
        $Pharmacy_Id=$_SESSION['Pharmacy_Id'];  
        $C_id=$_GET['C_id'];
        $sql="SELECT customer_details.C_name,customer_details.C_phone,customer_details.s_date FROM purchase,sales,customer_details WHERE customer_details.C_id=sales.C_id and sales.C_id='$C_id'";
        $sql2=" SELECT Discount from pharmacy where Pharmacy_Id={$Pharmacy_Id}  ";
        $result=$conn->query($sql);
        $result2=$conn->query($sql2);
        $sno=0;
        $conn->close();
        $sno=0;
        $Temp=1;
        while($rows1=$result2->fetch_assoc()){
            $Temp=$rows1['Discount'];
        };
        $Temp=(100-$Temp)/100;
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
        <div class="head">Invoice</div>
        
        <hr><div class="bill print-container">
            <div class="customer">
            <?php 
                if($rows = $result->fetch_assoc()) {
                ?>
                <div><p>Customer Name: <?php echo $rows['C_name']; ?></p></div>
                <div><p>Customer Phone No: <?php echo $rows['C_phone']; ?></p></div>
                <div><p>Purchase Date: <?php echo $rows['s_date']; ?></p></div> 
            </div>
            <?php }  ?>
        <table >
		<tr>
            <th>Serial No.</th>
			<th>Medicine Name</th>
            <th>Quantity</th>
            <th>Price Per Items</th>
        </tr>
            <?php 
             require 'config.php';
             $C_id=$_GET['C_id'];
             $sql="SELECT customer_details.Total,purchase.Med_name,purchase.MRP,sales.QUANTITY FROM purchase,sales,customer_details WHERE customer_details.C_id=sales.C_id and purchase.Purchase_Id=sales.Purchase_Id and sales.C_id='$C_id'";
             $result=$conn->query($sql);
             if($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()) {
                
                echo "<tr>
                <td>".++$sno."</td>
                <td>".$row["Med_name"]."</td>
                <td>".$row["QUANTITY"]."</td>
                <td>Rs ".$row["MRP"]*$Temp."</td>
			          </tr>";
              }
                echo "</table>";
            }else {
              echo " ";
            }?>
	</table>
    <table >
            <?php 
             require 'config.php';
             $C_id=$_GET['C_id'];
             $sql1="SELECT customer_details.Total FROM sales,customer_details WHERE customer_details.C_id=sales.C_id and sales.C_id='$C_id'";
             $result1=$conn->query($sql1);
            if($row = $result1->fetch_assoc()) {
                
                echo "<tr>
                <th>Net Amount"."</th>
                <td>Rs ".$row["Total"]."</td>
			          </tr>";
              }
                echo "</table>";
            ?>
	</table>
    
    </div>
        <div class="back">
    <a href="report_pharmacist.php"><button class="openButton" >Back</button></a>
    </div>
       
</div>

</body>
</html>
<?php session_start();

require 'config.php'; 
$Pharmacy_Id=$_SESSION['Pharmacy_Id']; 
$sql="SELECT * from purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} ) order by Med_name";
$sql1=" SELECT Discount from pharmacy where Pharmacy_Id={$Pharmacy_Id}  ";

$result=$conn->query($sql);
 $i=0;
 $result1=$conn->query($sql1);
			
      $conn->close();
        $sno=0;
        $Temp=1;
        while($rows1=$result1->fetch_assoc()){
            $Temp=$rows1['Discount'];
        };
        $Temp=(100-$Temp)/100;
       
?>
<html>
    <head>
        <title>Add Sales</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div>
			<?php require 'navbar_pharmacist.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
            <div class="head">Add Sales Details</div>
            <hr>
            <div class="head">Add Customer Details</div>
            <form name="f1"  method="POST" action="sales.php">      
                <div>
                    <table> 
                        <tr>  
                    <td><label>Enter Customer Name :</label>  <input type="text" name="C_name" placeholder="Customer Name"></td>
                    <td><label>Enter Customer Phone_no :</label>  <input type="number" placeholder="Customer Phone_no" name="C_phone"></td>
                        </tr>
                        
                        <tr>  
                    <td><label>Outlet Id :</label>  <input type="text" name="Outlet" value="<?php if(isset($Pharmacy_Id)) { echo $Pharmacy_Id; } ?>"></td>        
                </tr>
                    </table>
                </div>
                
<div class="head">Add Medicines Purchased</div><br><br>
<div class="report">
   
<table  id="myTable">
    <thead>
        <tr >
		    <th><input type="checkbox" id="checkAll"></th>
		   <th>Medicine Name</th>
		    <th>Price</th>
            <th>Available Quantity</th>
		    <th>Quantity</th>
		</tr>
</thead>
		<tbody>
            <?php   
			while($rows=$result->fetch_array()){
			?>
			<tr>
			    <td><input type="checkbox" value="<?php echo $rows['Purchase_Id']; ?>||<?php echo $i; ?>" name="Purchase_Id[]"></td>
				<td><?php echo $rows['Med_name']; ?></td>
				<td><?php echo $rows['MRP']*$Temp; ?></td>
               <td><?php echo $rows['Quantity'];?></td>
				<td><input type="text" name="QUANTITY_<?php echo $i; ?>"></td>
			</tr>
			<?php
				$i++;
			}
			?>
		</tbody>
    </table>
    <script>
  
    // Initialize the DataTable
    $(document).ready(function () {
      $('#myTable').DataTable({
  
        // Disable the option to change
        // length in the DataTable
        lengthChange: true
      });
    }); 
  </script>
</div>
                <div>
                    <input type="submit" class="button" name="submit" value="Add"/>
                </div>
            </form></center>
</font>
        </div>
    </body>
</html>
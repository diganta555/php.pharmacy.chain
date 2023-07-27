<?php 
        require 'config.php';
    
        $sql="SELECT * from purchase order by Pharmacy_Loc";
        $result=$conn->query($sql);
        $conn->close();
        $sno=0;
?>

<html>
    <head>
        <title>Medicine List Purchased</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
              <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Medicine List Purchased</div><hr>
        <div class="report" style="overflow-x:auto;">
        <table id="myTable">
        <thead>
        <tr>
        <th>S-No</th>
        <th>Pharmacy Outlet</th>
        <th>Medicine Name</th>
        <th>Generic Name</th>
        <th>Batch Id</th>
        <th>Supplier Name</th>
        <th>Quantity</th>
        <th>M-Date</th>
        <th>Expiry Date</th>
        <th>M.R.P</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $GrandTotal=0;
            while($rows=$result->fetch_assoc())
            {
                ?>
            <tr>
        <td><?php echo ++$sno; ?></td>
        <td><?php echo $rows['Pharmacy_Loc']; ?></td>
        <td><?php echo $rows['Med_name']; ?></td>
        <td><?php echo $rows['Generic_name']; ?></td>
        <td><?php echo $rows['Batch_Id']; ?></td>
        <td><?php echo $rows['S_Name']; ?></td>
        <td><?php echo $rows['Quantity']; ?></td>
        <td><?php echo $rows['Manufacture_date']; ?></td>
        <td><?php echo $rows['Expiry_date']; ?></td>
        <td><?php echo $rows['MRP']; ?></td>
        <td><a href="edit_med.php?Purchase_Id=<?=$rows['Purchase_Id'];?>"><button class="edit1">Edit</button></a> &nbsp<a href="delete_med.php?Purchase_Id=<?=$rows['Purchase_Id'];?>" onClick="return confirm('Are you sure you want to delete?')"><button class="del1">Delete</button></a></td>
        </tr>
        <?php
        $GrandTotal +=$rows['T_Amount'];
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
      <div class="total">
    <table >
        <?php   
        echo "<tr><th colspan='5'>Total Purchased Amount : <strong> Rs ".$GrandTotal."</strong></td><tr>"; ?>
	</table>
            </div><br>
            <a href="add_purchase.php"><button class="openButton"><strong>Add New Medicine</strong></button></a>
</div>

        </div>           
    </body>
</html>
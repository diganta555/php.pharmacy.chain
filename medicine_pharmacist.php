<?php 
        require 'config.php';
        session_start();
        $Pharmacy_Id=$_SESSION['Pharmacy_Id'];    
        $sql="SELECT * from purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} ) order by Pharmacy_Loc";
        $sql1=" SELECT Discount from pharmacy where Pharmacy_Id={$Pharmacy_Id}  ";
        
        $result=$conn->query($sql);
        $result1=$conn->query($sql1);
        

        // $sql1="SELECT Quantity from purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} ) order by Pharmacy_Loc";
        // $result=$conn->query($sql1);
        // while($row = $result->fetch_assoc()){
        // $qty=$row['Quantity'];
        // echo $qty;}
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
        <title>Medicine List</title>
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
			<?php require 'navbar_pharmacist.php' ;?>
        </div>
        
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Avaliable Medicine List</div>
        <hr><div class="report">
        <table id="myTable">
            <thead>
        <tr>
        <th>Serial No</th>
        <th>Pharmacy location</th>
        <th>Medicine Name</th>
        <th>Generic Name</th>
        <th>Quantity</th>
        <th>Batch Id</th>
        <th>Supplier Name</th>
        <th>M-Date</th>
        <th>Expiry Date (mm/yy)</th>
        <th>M.R.P</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($rows=$result->fetch_assoc())
            {
                //$Temp =$result1*$rows['MRP'];
                ?>
            <tr>
        <td><?php echo ++$sno; ?></td>
        <td><?php echo $rows['Pharmacy_Loc']; ?></td>
        <td><?php echo $rows['Med_name']; ?></td>
        <td><?php echo $rows['Generic_name']; ?></td>
        <td><?php echo $rows['Quantity']; ?></td>
        <td><?php echo $rows['Batch_Id']; ?></td>
        <td><?php echo $rows['S_Name']; ?></td>
        <td><?php echo $rows['Manufacture_date']; ?></td>
        <td><?php echo $rows['Expiry_date']; ?></td>
       
        <td><?php echo $rows['MRP']*$Temp; ?></td>
        
        </tr>
        <?php
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
        </div>
                
    </body>
</html>
<?php 
        require 'config.php';
    
        $sql="SELECT * from supplier ";
        $result=$conn->query($sql);
        // $conn->close();
?>

<html>
    <head>
        <title>Supplier Details</title>
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
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Supplier Details</div>
        <hr>
       <div class="report">
        <table id="myTable">
        <thead>
        <tr>
        <th>Supplier Id</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>Supplier Phone No.</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            while($rows=$result->fetch_assoc())
            {
              echo "<tr>";
              echo "<td>".$rows['S_Id']."</td>";
              echo "<td>".$rows['S_Name']."</td>";
              echo "<td>".$rows['S_Address']."</td>";
              echo "<td>".$rows['S_Phoneno']."</td>";	
              echo "<td style=\"width:50px\"><a href=\"edit_supplier.php?S_Id=$rows[S_Id]\"><button class=\"edit\">Edit</button></a> <a href=\"delete_supplier.php?S_Id=$rows[S_Id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button class=\"del\">Delete</button></a></td>";		
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
    <div>
      <button class="openButton" onclick="openForm()"><strong>Add New Supplier</strong></button>
    </div>
    <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="supplier_db.php" method="POST" class="formContainer">
        <div class="head">Add New Supplier</div>
                    <table>
                    <tr>  
                    <td><label>Enter Supplier Id :</label>  <br>
                    <input type="number" name="S_Id" placeholder="Supplier Id"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter Supplier Name :</label>  <br>
                    <input type="text" name="S_Name" placeholder="Supplier Name"></td>
                    </tr>
                        <tr>  
                    <td><label>Enter Supplier Address :</label><br>  <input type="text" name="S_Address" placeholder="Supplier Address"></td>
                    </tr>
                        <tr><td><label>Enter Supplier Phone_no :</label><br>  <input type="number" placeholder="Supplier Phone_no" name="S_Phoneno"></td></tr>
                    </table> 
        <br>
            <input type="submit" class="btn" name="submit" value="Save"></input>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
    </div>
    <div class="back">
    <a href="Dashboard_admin.php"><button class="openButton" >Back</button></a>
    </div>

</div>
     
    </body>
</html>
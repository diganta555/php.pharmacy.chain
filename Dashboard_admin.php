<?php session_start(); ?>
<?php 
    require 'config.php';
    //$id=$_GET['id'];
    $sql="SELECT * from users ";
    // $sql="SELECT * from users where id='$id'";
    $result=$conn->query($sql);
    if(!isset($_SESSION['id']) && empty($_SESSION['id'])){
        $parameter = $_SERVER['QUERY_STRING'];
        parse_str($parameter, $get_array);
        $id=$get_array['id'];
        $_SESSION['id'] =$id;
        }
?>
<html>
    <head>
        <title>Login</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <div>
				<?php require 'navbar_admin.php' ;?>
    </div>
    <div class="bodyspace">
    <font size = 4 color="black"><center>
            <div>
              <div class="head">Admin Dashboard</div>
            <div class="head2">
              <button type="button" class="icon-button" onclick="openForm()">
                <span class="material-icons">notifications</span>
                <span class="icon-button__badge">2</span>
              </button>
              <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form method="POST" class="formContainer">
        <div class="head">Out of Stock Notification</div>
        <?php 
        require 'config.php';
        $sql="SELECT Med_name,Quantity,Pharmacy_Loc,Batch_Id from purchase WHERE Quantity<'10'";
        $result=$conn->query($sql);
        ?>
        <div>
        <table>
        <tr>
        <th>Pharmacy</th>
        <th>Medicine Name</th>
        <th>Available Quantity</th>
        <th>Batch Id</th>
        </tr>
        <?php 
            if($result->num_rows > 0 ){
                while($rows = $result->fetch_assoc()) {
                
                ?>
            <tr>
        <td><?php echo $rows['Pharmacy_Loc']; ?></td>
        <td><?php echo $rows['Med_name']; ?></td>
        <td><?php echo $rows['Quantity']; ?></td>
        <td><?php echo $rows['Batch_Id']; ?></td>
        </tr>
        <?php
            } 
            ?>
            <?php }else {
              echo "No Medicine Out of Stock";
            }?>
      </table>
      
          </div>
        <br>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
            </div>
            </div>
            <hr>


            <div class="flex-container">
            <div class="box2">
                <?php
                  $sql="SELECT COUNT(C_name) as Total FROM customer_details "; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo $row["Total"];
                  }  
                ?>
                <br>Total Customers
            </div>
            <div class="box2">
            <?php
                  $sql="SELECT COUNT(S_Name) as Total FROM supplier "; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo $row["Total"];
                  }  
                ?>
                <br>Total Suppliers</div>
            <div class="box2">
                <?php
                  $sql="SELECT COUNT(Med_name) as Total FROM purchase "; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo $row["Total"];
                  }  
                ?>
                <br>Total Medicines</div>
            <div class="box2">
            <?php
                  $sql="SELECT ROUND(SUM(Total)) as G_Total from customer_details where s_date=CURDATE();"; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo "Rs ".$row["G_Total"];
                  }  
                ?>
                <br>Today's Total Sales</div>
            <div class="box2">
            <?php
                  $sql="SELECT SUM(T_Amount) as G_Total from purchase where Date=CURDATE()"; 
                  $result=$conn->query($sql);
                  if($row = $result->fetch_assoc()) {
                    echo "Rs ".$row["G_Total"];
                  } 
                  ?>
                <br>Today Total Purchase</div>
            </div>
            <hr>
            <div class="flex-container">
            <div class="box" style="background-image:url('image/medicine.jpg');"><span><a href="add_excel.php">Add Medicine Record</a></span></div>
            <div class="box" style="background-image:url('image/supplier1.jpg');"><span><a href="supplier.php">Add New Supplier</span></a></div>
            <div class="box" style="background-image:url('image/graphimg.jpg');"><span><a href="monthly_barchart.php">Monthly Sales Representation</a></span></div>
        </div>
            <div class="flex-container">
            <div class="box" style="background-image:url('image/sales.jpg');"><span><a href="report_summary.php">Sales Report</span></a></div>
            <div class="box" style="background-image:url('image/purchase.jpg');"><span><a href="report_purchase.php">Purchase Report</span></a></div>
            <div class="box" style="background-image:url('image/graphimg.jpg');"><span><a href="bargraph.php">Daily Sales Representation</a></span></div>
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
    </body>
    
</html>
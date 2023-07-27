<?php session_start();

require 'config.php'; 
// $Pharmacy_Id=$_SESSION['Pharmacy_Id']; 
$sql="SELECT * from supplier";
$all_supplier = mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>Add Purchase</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
            <div class="head">Add Purchase Details</div>
            <hr>
            <div class="head">Add Supplier Details</div>
            <form method="POST" action="purchase_db.php">      
                <div>
                    <table> 
                        <tr>  
                    <td><label>Enter Supplier Name :</label> 
                     
                     <select name="S_Name[]">
                     <option value="" disabled selected>Choose Supplier :</option>
			<?php
				while ($supplier = mysqli_fetch_array($all_supplier,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $supplier["S_Name"];	
				?>">
					<?php echo $supplier["S_Name"];	
					?>
				</option>
			<?php
				endwhile;
			?>
		</select>
                    </td>
                    <!-- <td><label>Enter Date :</label>  <input type="date" name="Date"></td> -->
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="head">Add Medicine Details</div><br>
<div>
    <table>
        <tr>
        <td><label>Enter Medicine Name :</label>  <input type="text" name="Med_name" placeholder="Medicine Name"></td>
                <td><label>Enter Manufacture Date :</label>  <input type="text" name="Manufacture_date" placeholder="Manufacturing Date"></td>
        </tr>
        <tr>
                <td><label>Enter Generic Name :</label>  <input type="text" name="Generic_name"placeholder="Generic Name"></td>
                <td><label>Enter Expiry Date (mm/yy) :</label>  <input type="text" name="Expiry_date"placeholder="Expiry Date"></td>
        </tr>
        <tr>
                <td><label>Enter BatchID :</label>  <input type="text" name="Batch_Id"placeholder="BatchId">
                <td><label>Enter M.R.P :</label>  <input type="number" name="MRP" placeholder="M.R.P"></td>       
            </tr>
        <tr>
                <td><label>Enter Quantity Purchased :</label>  <input type="number" name="Quantity"placeholder="Quantity"></td>
                
                <td>
                    <select name="Pharmacy_Loc">
                        <option value="" disabled selected>Choose Outlet :</option>
                        <option value="Saltlake">Saltlake</option>
                        <option value="Santragachi">Santragachi</option>
                        <option value="Rajarhat">Rajarhat</option>
                        <option value="Konnagar">Konnagar</option>
                    </select></td>
                    </tr>
    </table>
</div>
                <div>
                    <input type="submit" class="button" name="submit" value="Add"/>
                </div>
            </form></center>
            <!-- <table>
                <hr>
            <tr>
                        <td colspan=2>
                    <form method="post" action="import.php" enctype="multipart/form-data">
                    <input type="file" name="excel_file" accept=".csv">
                    <input type="submit" name="import" value="Import" class="search">
                    </form>
                        </td>
                        </tr>
            </table> -->
</font>
        </div>
    </body>
</html>
<?php
require 'config.php';
session_start();
$Purchase_Id = $_GET['Purchase_Id'];
$sql="SELECT * FROM purchase WHERE Purchase_Id='$Purchase_Id'";
$result=$conn->query($sql);
if(isset($_POST['submit']))
            {
                $Purchase_Id=$_POST['Purchase_Id'];
                $S_Name=$_POST['S_Name'];
                $Date=$_POST['Date'];
                $Med_name=$_POST['Med_name'];
                $Generic_name=$_POST['Generic_name'];
                $Batch_Id=$_POST['Batch_Id'];
                $Quantity=$_POST['Quantity'];
                $Expiry_date=$_POST['Expiry_date'];
                $MRP=$_POST['MRP'];
                $Manufacture_date=$_POST['Manufacture_date'];
                $Pharmacy_Loc=$_POST['Pharmacy_Loc'];
                $T_Amount=$_POST['Quantity']*$_POST['MRP'];
            $sql = "UPDATE purchase
            SET Purchase_Id='$Purchase_Id', S_Name='$S_Name', Date='$Date',Med_name ='$Med_name', Generic_name='$Generic_name',
            Batch_Id='$Batch_Id',Quantity='$Quantity',Expiry_date='$Expiry_date',MRP='$MRP',Manufacture_date='$Manufacture_date',
            Pharmacy_Loc='$Pharmacy_Loc',T_Amount='$T_Amount'
            WHERE Purchase_Id='$Purchase_Id' ";
            if ($conn->query($sql) == TRUE) {
                echo "UPDATED successfully";
                header('location:medicine_admin.php');
            }
            else{
                echo "UPDATE Failed";
            }
        }        
?>
<html>
    <head>
        <title>Edit purchase Details</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
            <div class="head">Edit purchase Details</div>
            <hr>
            <form method="POST" class="report">
            <?php
                if($rows = $result->fetch_assoc()) { ?>
                    <table>
                    <tr> 
                    <td><label>Enter purchase Id :</label>  <br>
                    <input type="number" name="Purchase_Id" value="<?php echo $rows['Purchase_Id'];?>"></td>
                     
                    <td><label>Enter purchase Name :</label>  <br>
                    <input type="text" name="S_Name" value="<?php echo $rows['S_Name'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter purchase Date :</label>  <br>
                    <input type="text" name="Date" value="<?php echo $rows['Date'];?>"></td>
                    
                    <td><label>Enter Medicine Name :</label>  <br>
                    <input type="text" name="Med_name" value="<?php echo $rows['Med_name'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter Generic Name :</label>  <br>
                    <input type="text" name="Generic_name" value="<?php echo $rows['Generic_name'];?>"></td>
                     
                    <td><label>Enter Batch_Id :</label>  <br>
                    <input type="text" name="Batch_Id" value="<?php echo $rows['Batch_Id'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter Manufacture Date :</label>  <br>
                    <input type="text" name="Manufacture_date" value="<?php echo $rows['Manufacture_date'];?>"></td>
                      
                    <td><label>Enter Quantity :</label>  <br>
                    <input type="number" name="Quantity" value="<?php echo $rows['Quantity'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter Expiry Date :</label>  <br>
                    <input type="text" name="Expiry_date" value="<?php echo $rows['Expiry_date'];?>"></td>
                     
                    <td><label>Enter MRP :</label>  <br>
                    <input type="number" name="MRP" value="<?php echo $rows['MRP'];?>"></td>
                    </tr>
                    <tr >  
                    <td colspan=2><label>Enter Pharmacy Location :</label><br>  
                    <input type="text" name="Pharmacy_Loc" value="<?php echo $rows['Pharmacy_Loc'];?>"></td>
                    </tr>
                    </table> 
        <br>
        <td><input type="hidden" name="id" value=<?php echo $_GET['Purchase_Id'];?>></td>
				<td><input type="submit" class="Button" name="submit" value="Update"></td>
                <?php } ?>    
        </form>
        </body>
</html>

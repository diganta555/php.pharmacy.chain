<?php
require 'config.php';
session_start();
$S_Id = $_GET['S_Id'];
$sql="SELECT * FROM supplier WHERE S_Id='$S_Id'";
$result=$conn->query($sql);
if(isset($_POST['submit']))
            {
                $S_Id=$_POST['S_Id'];
                $S_Name=$_POST['S_Name'];
                $S_Address=$_POST['S_Address'];
                $S_Phoneno=$_POST['S_Phoneno'];
            $sql = "UPDATE supplier
            SET S_Id='$S_Id', S_Name='$S_Name', S_Address='$S_Address',  S_Phoneno='$S_Phoneno' 
            WHERE S_Id='$S_Id' ";
            if ($conn->query($sql) == TRUE) {
                echo "UPDATED successfully";
                header('location:supplier.php');
            }
            else{
                echo "UPDATE Failed";
            }
        }        
?>
<html>
    <head>
        <title>Edit Supplier Details</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
            <div class="head">Edit Supplier Details</div>
            <hr>
            <form method="POST" >
                <?php
                if($rows = $result->fetch_assoc()) { ?>
                    <table>
                    <tr> 
                    <td><label>Enter Supplier Id :</label>  <br>
                    <input type="number" name="S_Id" value="<?php echo $rows['S_Id'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Enter Supplier Name :</label>  <br>
                    <input type="text" name="S_Name" value="<?php echo $rows['S_Name'];?>"></td>
                    </tr>
                        <tr>  
                    <td><label>Enter Supplier Address :</label><br>  
                    <input type="text" name="S_Address" value="<?php echo $rows['S_Address'];?>"></td>
                    </tr>
                        <tr><td><label>Enter Supplier Phone_no :</label><br>  
                        <input type="number" name="S_Phoneno" value="<?php echo $rows['S_Phoneno'];?>"></td></tr>
                    </table> 
        <br>
        <td><input type="hidden" name="id" value=<?php echo $_GET['S_Id'];?>></td>
				<td><input type="submit" class="openButton" name="submit" value="Update"></td>
                <?php } ?>
        </form>
        </body>
</html>


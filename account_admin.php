<?php 
        require 'config.php';
        session_start();
        $sql="SELECT * FROM users WHERE Category='admin'";
        $result=$conn->query($sql);
?>

<html>
    <head>
        <title>Account Details</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
			<?php require 'navbar_admin.php' ;?>
        </div>
        <div class="bodyspace">
        <font size = 4 color="black"><center>
        <div class="head">Account Details</div><hr>
        <form method="POST" class="formContainer">
                    <table>
                    <tr> 
                    <td><label>Name :</label>  <br>
                    <input type="text" name="Name" value="<?php echo $rows['Name'];?>"></td>
                    </tr>
                    <tr>  
                    <td><label>Username:</label>  <br>
                    <input type="text" name="Username" value="<?php echo $rows['Username'];?>"></td>
                    </tr>
                    </tr>
                        <tr><td><label>Phone_no :</label><br>  
                        <input type="number" name="phone_no" value="<?php echo $rows['phone_no'];?>"></td></tr>
                    </table> 
        <br> 
        </form>
        

        </div>
                
    </body>
</html>
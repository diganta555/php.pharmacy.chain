<?php session_start(); ?>

    
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Login</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body background="image/pill.jpg">
        <div class="login">
        <img src="image/prof.jpg"><br>
        <font class="formcolor" face = "Constantia" size = 4 color="black"><center>
            <h1><b>Login</b></h1><br>

                <!-- error message  -->
            <?php if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) { ?>
                        <div class="error-message"><?php echo $_SESSION['error_message']; ?></div>
                        <?php
                        unset($_SESSION['error_message']);
                    }
            ?>

            <form name="f1"  method="POST" action="logindb.php"> 
                
                <p>   
                <input type="text" name="username" placeholder="Enter Your Username" required>
                </p>
                <p>
                    <input type="password"  name="pass" placeholder="Enter Your Password" required>
                </p>
                <p>
                    <select name="Category" required>
                        <option disabled selected>Enter Category</option>
                        <option value="admin">Admin</option>
                        <option value="pharmacist">Pharmacist</option>
                    </select>
                </p>
                <!-- <p>
                <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="button"> Cancel</button>  
                </p> -->
                <p>
                    <input type="submit" class="button" name="submit" value="Login"/>
                </p>
            </form></center>
</font>
        </div>
    </body>
</html>
<?php session_start(); ?>
<?php 
    require 'config.php';
    $sql="SELECT * from users ";
?>
<html>
    <head>
        <title>Login</title>
        <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div>
				<?php require 'navbar_admin.php' ;?>
    </div>
    <div class="bodyspace">
    <font size = 4 color="black"><center>
            <div class="head">Add Medicine Record</div>
            <hr>
            <div class="head">Import Excel File to add medicine Record</div>
            <table>
            <tr>
                        <td colspan=2>
                    <form method="post" action="import.php" enctype="multipart/form-data">
                    <input type="file" name="excel_file" accept=".csv">
                    <input type="submit" name="import" value="Import" class="search">
                    </form>
                        </td>
                        </tr>
            </table>
    <div class="back">
    <a href="Dashboard_admin.php"><button class="openButton" >Back</button></a>
    </div>
    </div>
    </body>
</html>
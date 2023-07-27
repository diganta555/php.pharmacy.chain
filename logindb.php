<?php session_start();

require 'config.php';

    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $encryptedPassword=md5($pass);
    $Category=$_POST['Category'];
    
    $sql="SELECT * from users where Username='$username' and Password='$encryptedPassword'  and Category='$Category' ";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $id=$row['id'];
    $Pharmacy_Id=$row['Pharmacy_Id'];
    $_COOKIE['id'] = $id;
    
    if($result->num_rows == 1){

        echo"Login Succesfull";
        
      
        if ($Category == 'admin'){
        header("Location: Dashboard_admin.php?id=$id");

      }else{
        header("Location: Dashboard_pharmacist.php?id=$id&Pharmacy_Id=$Pharmacy_Id");
        exit();
      }
    }
    else {
        $_SESSION['error_message'] = "Account does not exist";
        header("Location: index.php");
      }
}
?>
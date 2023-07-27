<?php session_start(); ?>
<?php
require 'config.php';
//$conn1 = $conn; 

if(isset($_POST['submit']))
{
  foreach($_POST['S_Name'] as $key=>$value){
  $S_Name=$_POST['S_Name'][$key];
  //$Date=$_POST['Date'];
  $Med_name=$_POST['Med_name'];
  $Generic_name=$_POST['Generic_name'];
  $Batch_Id=$_POST['Batch_Id'];
  $Quantity=$_POST['Quantity'];
  $Expiry_date=$_POST['Expiry_date'];
  $MRP=$_POST['MRP'];
  $Manufacture_date=$_POST['Manufacture_date'];
  $Pharmacy_Loc=$_POST['Pharmacy_Loc'];
  
  //$TP_Amount=$P_Amount*$Quantity;
  $T_Amount=$Quantity*$MRP;
  // $P_Amount=$T_Amount*.6;


$update_Flag = false;
$MRP_ALL = $MRP*$Quantity;
$sql1="SELECT * from purchase" ;

$result=$conn->query($sql1);
        //$conn->close();
        $sno=0;
        while($rows=$result->fetch_assoc())
        {
          if($rows['Batch_Id']== $Batch_Id && $rows['Pharmacy_Loc']== $Pharmacy_Loc && $row['Manufacture_date'] ==$Manufacture_date && $row ['Expiry_date']==$Expiry_date){
            $update_Flag= true;
          }
        }

//insert data into table
if ($update_Flag== false){
$sql = "INSERT INTO purchase (S_Name,Date,Med_name,Generic_name,Batch_Id,Quantity,Expiry_date,MRP,Manufacture_date,Pharmacy_Loc,T_Amount)
VALUES ('$S_Name',NOW(), '$Med_name', '$Generic_name', '$Batch_Id', '$Quantity','$Expiry_date','$MRP','$Manufacture_date','$Pharmacy_Loc','$T_Amount')";
}
else{
 
  //$sql="UPDATE purchase SET Quantity=Quantity+$Quantity,T_Amount=T_Amount+$T_Amount,Manufacture_date='$Manufacture_date',Expiry_date='$Expiry_date' WHERE Batch_Id = \"$Batch_Id\"";
  $sql="UPDATE purchase SET Quantity=Quantity+$Quantity ,T_Amount=T_Amount+$T_Amount WHERE Batch_Id = \"$Batch_Id\" and  Pharmacy_Loc =  \"$Pharmacy_Loc\" and Manufacture_date=\"$Manufacture_date\" and Expiry_date = \"$Expiry_date\"";
  echo "$sql";
  //echo "$Quantity";
}

$result1=$conn->query($sql) ;
          $conn->close();
header("Location: add_purchase.php"); 
//if ($conn->query($sql) === TRUE) {
 // header("Location: add_purchase.php"); 
//} else {
//  echo "Error: " . $sql . "<br/>" . $conn->error;
//}
  }
}
$conn->close();
 
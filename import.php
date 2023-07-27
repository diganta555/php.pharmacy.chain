<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){

if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name'])){
    require_once('SimpleExcel/SimpleExcel.php'); 
    
    $excel = new SimpleExcel('csv');                  
    
    $excel->parser->loadFile($_FILES['excel_file']['name']);           
    
    $foo = $excel->parser->getField(); 

    $count = 1;
    require 'config.php';
    echo "count($foo)";
    while(count($foo)>$count){
    
        $S_Name = $foo[$count][0];
        $Date = $foo[$count][1];
        $Med_name = $foo[$count][2];
        $Generic_name=$foo[$count][3];
        $Batch_Id= $foo[$count][4];
        $Manufacture_date = $foo[$count][5];
        $Quantity = $foo[$count][6];
        $Expiry_date = $foo[$count][7];
        $MRP = $foo[$count][8];
        $Pharmacy_Loc = $foo[$count][9];
        $T_Amount = $MRP*$Quantity;

$update_Flag = false;


$sql1="SELECT * from purchase ";
$result=$conn->query($sql1);
        //$conn->close();
        //$sno=0;
        while($rows=$result->fetch_assoc())
        {
          if($rows['Batch_Id']== $Batch_Id && $rows['Pharmacy_Loc']== $Pharmacy_Loc ){
            $update_Flag= true;
          }
        }

//insert data into table
if ($update_Flag== false){
$sql = "INSERT INTO purchase (S_Name,Date,Med_name,Generic_name,Batch_Id,Quantity,Expiry_date,MRP,Manufacture_date,Pharmacy_Loc,T_Amount)
VALUES ('$S_Name',NOW(), '$Med_name', '$Generic_name', '$Batch_Id', '$Quantity','$Expiry_date','$MRP','$Manufacture_date','$Pharmacy_Loc','$T_Amount')";
}
else{
 
  $sql="UPDATE purchase SET Quantity=Quantity+$Quantity ,T_Amount=T_Amount+$T_Amount WHERE Batch_Id = \"$Batch_Id\" and  Pharmacy_Loc =  \"$Pharmacy_Loc\" and Manufacture_date=\"$Manufacture_date\" and Expiry_date = \"$Expiry_date\"";
 // echo "$sql";
// $sql1="SELECT * from purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} ) order by Med_name";//echo "$Quantity";
}

$result1=$conn->query($sql) ;

         // $conn->close();
header("Location: add_purchase.php"); 
  $count++;

    }

} 

 
}
 $conn->close();
?>
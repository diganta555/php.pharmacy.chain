
<?php
require 'config.php';

if(isset($_POST['submit']))
{
  $S_Id=$_POST['S_Id'];
  $S_Name=$_POST['S_Name'];
  $S_Address=$_POST['S_Address'];
  $S_Phoneno=$_POST['S_Phoneno'];
}
//insert data into table
$sql = "INSERT INTO supplier (S_Id,S_Name,S_Address,S_Phoneno)
VALUES ('$S_Id','$S_Name','$S_Address', '$S_Phoneno')";

if ($conn->query($sql) === TRUE) {
  header("Location: supplier.php"); 
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>

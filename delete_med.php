<?php

require 'config.php';

$Purchase_Id = $_GET['Purchase_Id'];
$sql="DELETE FROM purchase WHERE Purchase_Id='$Purchase_Id'";
$result=$conn->query($sql);

header("Location:medicine_admin.php");
?>


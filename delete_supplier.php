<?php

require 'config.php';

$S_Id = $_GET['S_Id'];

$sql="DELETE purchase,supplier FROM purchase INNER JOIN supplier ON purchase.S_Name=supplier.S_Name WHERE supplier.S_Id='$S_Id'";
$result=$conn->query($sql);

header("Location:supplier.php");
?>


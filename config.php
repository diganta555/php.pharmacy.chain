
<?php
$host="localhost";
$user="root";
$password="";
$db="pharmacy_chain";
$conn= new mysqli($host,$user,$password,$db);
if($conn->connect_error) {
    die("Failed to connect with MySql:".$conn->connect_error);
}

?>
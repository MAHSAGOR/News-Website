<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];

/*$servername="localhost";
$username="root";
$password="";
$database="sgnews";

//create connection
$connection=new mysqli( $servername, $username, $password, $database);*/
include 'config.php';
$sql="DELETE FROM clients WHERE id=$id";
$connection->query($sql);
}
header("location: /weblab/admin.php");
exit;
?>
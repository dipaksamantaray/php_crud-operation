<?php
include "connection.php";
$id = $_GET["id"];

$delete = "delete from JobRegstration where id = $id";
$query = mysqli_query($con,$delete);




header("location:display.php");


?>
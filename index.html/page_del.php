<?php
include ("connection.php");
$id = $_REQUEST['id'];
$sql=mysqli_query($connect, "delete from page where id = '$id' ");
header('location:pages.php');

?>
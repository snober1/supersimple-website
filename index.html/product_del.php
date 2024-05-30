<?php
include ("connection.php");
$id = $_REQUEST['id'];
$sql=mysqli_query($connect, "delete from product where id = '$id' ");
header('location:product.php');

?>
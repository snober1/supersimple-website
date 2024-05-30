<?php
include ("connection.php");
$id = $_REQUEST['id'];
$sql=mysqli_query($connect, "insert from product where id = '$id' ");
header('location:gallery.php');
echo "<script>".'window.alert'('The Product Rank is Updated Successfully');"</script>" 
?>
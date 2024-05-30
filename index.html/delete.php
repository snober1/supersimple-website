<?php
include ("connection.php");
$id = $_REQUEST['id'];
$sql=mysqli_query($connect, "delete from product where id = '$id' ");
header('location:gallery.php');
echo "<script>"."window.alert('The Record are Deleted.');"."top.location='gallery.php';"."</script>";
?>
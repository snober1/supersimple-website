<!--- insert admin dashboard add gallery action--->
<?php
include ('connection.php');
if($_POST['submit']==true);
{
    $name=$_POST['name'];
    $des=$_POST['description'];
    $file=$_POST['file'];
    mysqli_query($connect, "INSERT INTO product(name, description, image) VALUES ('$name', '$des', '$file')");
    header("location:gallery.php");
}
?>
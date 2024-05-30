<!--banner add-->
<?php
include ('connection.php');
if($_POST['submit']==true);
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    mysqli_query($connect, "INSERT INTO product(name) VALUES ('$name')");
    header("location:banner.php");
}
?>
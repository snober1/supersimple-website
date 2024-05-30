<!--- insert admin dashboard update profile action--->
<?php
include ('connection.php');
if($_POST['submit']==true);
{
    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['pswd'];
    $newpswd=$_POST['newpswd'];
   mysqli_query($connect, "UPDATE register SET name='$name', password='$password', new_password='$newpswd'");
    header("location:profile.php");
   }

?>
<!--end -->
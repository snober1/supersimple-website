<!--- insert home - page contact_us action--->
<?php
include ('connection.php');
if($_POST['submit']==true);
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['message'];

 mysqli_query($connect, "INSERT INTO contact_us(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$msg')");

   header("location:home_pg.php");
}
?>
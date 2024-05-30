<?php
include ('connection.php');
if(isset($_POST['submit']));
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pswdd=$_POST['pswd'];
    mysqli_query($connect, "INSERT INTO register(name, email, password) VALUES ('$name', '$email', '$pswdd')");
    header("location:login.php");
   
}
?>
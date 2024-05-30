<?php
include ('connection.php');
if(isset($_POST['submit']));
{
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $query = mysqli_query($connect, "select * from register where email='$email' and password='$pswd'");
    $row = mysqli_fetch_array($query);
    if($email==$row['email'] and $pswd==$row['password']) {
        # code... 
        $_SESSION['email']=$email;
     header("location:panel.php");
    }
   else if($email!=$row['email'] and $pswd!=$row['password']){
      
    header("location:login.php");
   }
}
?>
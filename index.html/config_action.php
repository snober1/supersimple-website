<?php
include ('connection.php');
if(isset($_POST['submit']));
{
    $title=$_POST['name'];
    $keyword=$_POST['keyword'];
    $des=$_POST['description'];
    $home=$_POST['home_pro'];
    $page=$_POST['per_page'];
    $product=$_POST['rel_pro'];
    $email=$_POST['email'];
    $phone=$_POST['phoneno'];
    $footer=$_POST['footer_cont'];
    $company=$_POST['comapny'];
    $fb=$_POST['fb'];
    $twitter=$_POST['twitter'];
    $insta=$_POST['insta'];
    $msg=$_POST['message'];
   mysqli_query($connect, "insert into config(page_title, meta_keyword, description, product_per_page, home_product, related_product, email, phone_number, footer_contact, company_name, facebook, twitter, instagram, footer_legal_text)
     VALUES ('$title', '$keyword', '$des', '$home', '$page', '$product', '$email', '$phone', '$footer', '$company', '$fb', '$twitter', '$insta', '$msg')");
  
     header("location:config.php");
}
?>

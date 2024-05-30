<!--- Update admin dashboard configuration websites action--->

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
   mysqli_query($connect, "UPDATE config SET page_title='$title', meta_keyword= '$keyword', description= '$des', product_per_page='$page', home_product='$home', related_product='$product', email='$email', phone_number='$phone', footer_contact='$footer', company_name='$company', facebook='$fb', twitter='$twitter', instagram='$insta', footer_legal_text= '$msg' where id='$id'");
      
     header("location:admin_config.php");
}
?>

<!--end update code-->
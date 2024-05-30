<!DOCTYPE html>
<head>
     <title>Product_pg SPORTS WEAR BP</title>
  <link rel="stylesheet" href="">
  <style>
 
  *{
    padding: 0;
    margin: 0;
}
@media only screen and (max-width: 268px) {
 .register {
    display: block;
    margin-bottom: 10px;
  }
}
body{
    top: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.outer{
    border: 2px solid none;
    height: 100vh;
    width: 100%;
    position: absolute;
    margin: 0;
}
.nav_bar{
    border: 2px solid black;
    width: 98%;
    height: 3vh;
    position: absolute;
  background-color: black;
   
}
.nav_bar span{
    font-size: 12px;
    font-weight: 100;
    font-family: sans-serif;
    color: white;
    margin-left: 25%;

}
.icons {
    border: 2px solid non;
    width: 20%;
    height: 4vh;
    top: 0%;
    margin-left: 80%;
    color: white;
    position: absolute;
}
.icons i{
    margin-left: 7%;
    color: white;
    cursor: pointer;
    font-size: 12px;
}
.navii{
    border: 2px solid none;
    width: 98%;
    height: 13vh;
    margin-top: 2.7%;
    position: absolute;
  background-color: white;
  
}
.whatsapp {
    border: 2px solid none;
    width: 40%;
    height: 13vh;
    margin-top: 0%;
    position: absolute;

}
.whatsapp i{
    margin-left: 10%;
    color: black;
    align-items: center;
    align-content: center;
    margin-top: 5%;
    margin-left: 20%;
    font-size: 30px;
    position: absolute;
}
.whatsapp span{
    margin-left: 33%;
    color: black;
    margin-top: 7%;
    font-family: sans-serif;
    font-weight: 100;
    font-size: 10px;
    position: absolute;
}
.whatsapp label{
    margin-left: 32.8%;
    color: red;
    margin-top: 11%;
    font-family: sans-serif;
    font-weight: 100;
    font-size: 10px;
    position: absolute;
}
.logo{
    border: 2px solid none;
    width: 30%;
    height: 13vh;
    margin-top: 0%;
    margin-left: 30%;
    position: absolute;
}
.logo span{
    margin-left: 33%;
    color: black;
    margin-top: 7%;
    font-family: sans-serif;
    font-style: italic;
    font-weight: 400;
    font-size: 32px;
    position: absolute;
}
.logo span i{
    margin-left: 6%;
    color: black;
    margin-top: 38%;
    text-decoration: double;
    font-family: sans-serif;
   font-variant: initial;
    font-weight: 400;
    font-size: 25px;
    position: absolute;
}
.mail {
    border: 2px solid none;
    width: 40%;
    height: 13vh;
    margin-top: 0%;
    margin-left: 70%;
    position: absolute;

}
.mail i{
    margin-left: 10%;
    color: black;
    align-items: center;
    align-content: center;
    margin-top: 5%;
    margin-left: 20%;
    font-size: 30px;
    position: absolute;
}
.mail span{
    margin-left: 33%;
    color: black;
    margin-top: 7%;
    font-family: sans-serif;
    font-weight: 100;
    font-size: 10px;
    position: absolute;
}
.mail label{
    margin-left: 32.8%;
    color: red;
    margin-top: 11%;
    font-family: sans-serif;
    font-weight: 100;
    font-size: 10px;
    position: absolute;
}
.homes {
    border: 1px solid none;
    height: 24%;
    width: 80%;
    margin-top: 0%;
    margin-left: 27%;
    position: relative;
}
.homes a{
    margin-top: -5%;
    margin-left: 3%;
    font-family: sans-serif;
    font-weight: 100;
    font-size: 11px;
    color: black;
    text-decoration: none;
    position: relative;
    display: inline-block;
}
.homes a:hover{
    text-decoration: overline;
    color: red;
}
.register{
    border: 2px solid none;
    height: auto;  
    width: 100%;
    margin-left: 0%;
    border-radius: 12px;
    margin-top: 3%;
    flex: 0 0 300px;
    display: inline-block;
 position: absolute;
}
.product_wrapper{
    border: 1px solid none;
    height: 39%;
    text-align: center;
    width: 20%;
    display: inline-block;
    margin-left: 4%;
    margin-top: 5%;
}
.product_wrapper .pro_pic{
    border: none;
    flex: 0 0 300px;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out; /* smooth img zoomming*/
}
.product_wrapper img{
    grid: unset;
}
.pro_pic img:hover{
    transform: scale(1.1);
    border-radius: 5px;
    
}
.product_wrapper .pro_name{
    margin-top: 5%;
    font-variant: small-caps;
}
  </style>
</head>

<body>
    <!-- outer div---->
    <div class="outer">
    <div class="nav_bar">
<span>Welcom To ZKP Brothers</span>
<div class="icons">
<i style="color: white;"><ion-icon name="logo-facebook"></ion-icon></i>
<i><ion-icon name="logo-instagram"></ion-icon></i>
<i><ion-icon name="mail"></ion-icon></i></div>
</div><!---close icons div-->
</div>
</nav>
<!---start navigation of logo-->
  <div class="navii">
    <div class="whatsapp">
<i><ion-icon name="logo-whatsapp"></ion-icon></i>
<span>WhatsApp</span>
<label>+92 3457898669</label>
 </div> 
<div class="logo">
    <span>Zkp<i> Brothers</i></span>
</div>
<div class="mail">
    <i><ion-icon name="send-outline"></ion-icon></i>
    <span>Email</span>
    <label>xyz.xyz@gmail.com</label>
     </div> 
     <hr style=" position: relative;
     margin-top: 8%;
     color: black;">
      <div class="homes">
      
        <a href="home_pg.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <a href="product_pg.php">PRODUCTS</a>
        <a href="#">INQUIRY</a>
        <a href="#contactus">CONTACT US</a>
        <a href="register.php">SIGNIN</a>
        <a href="#" style="color: black; left: 15%;
        top: 30%;
        font-family: sans-serif;
        font-weight: 200;
        font-size: 22px;
        cursor: pointer;"><ion-icon name="search-circle-outline"></ion-icon></a>
        
    </div>


    <!-- main content registration - contact us data-->
    <div class="register">
        <?php 
        include ("connection.php");
        $select_product=mysqli_query($connect, "SELECT * FROM product");
        if(mysqli_num_rows($select_product) > 0);
           while($fetch_product=mysqli_fetch_array($select_product)){
        
        ?>
       <div class="product_wrapper">
        <form action="" method="POST">
       <div class="pro_pic"><img src="<?php echo $fetch_product['image'] ?>" width='200' height='255'></div>
       <div class="pro_name"><h4 style="display: inline-block;"><?php echo $fetch_product['name'] ?></h4></div>
       </div>
           
       <?php } ?>
    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
    </html>
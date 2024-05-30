<!DOCTYPE html>
<head>
    <title>SPORTS WEAR HP</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- outer div---->
    <div class="outer">
        <!--start nav_bar--->
<nav>
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
        <a href="">INQUIRY</a>
        <a href="#contactus">CONTACT US</a>
        <a href="register.php">SIGNIN</a>
        <a href="#" style="color: black; left: 15%;
        top: 30%;
        font-family: sans-serif;
        font-weight: 200;
        font-size: 22px;
        cursor: pointer;"><ion-icon name="search-circle-outline"></ion-icon></a>
        
    </div>

     <!---main content start -->
    <div class="main">
        <span><ion-icon name="chevron-back-outline"></ion-icon></span>
        <i><ion-icon name="chevron-forward-outline"></ion-icon></i>
  <div class="content">

<h3>LEATHER JACKETS</h3>
<P>Zkp Brothers produced wide range of leather jacket and leather carment with high quality material and creativity in design and work.</P>
<button><a style="text-decoration: none; color: white;" href="product_pg.php">View Products</a></button> 
    </div>
    <div class="pic">
    <img src="leather_jacket.jpg"></div>
    </div>
<!---main content end -->
</div><!---navii div close-->
<!---end navigation -->
<div class="gallery" style="border: none;">
 <!-- main content registration - contact us data-->
<div class="our_g1">
       <a href="#" ><img src="g1.jpg">
        <h5>LEATHER</h5>
        <span>GARMENTS</span></a>
    </div>
    <div class="our_g2">
        <a href="#" >   <img src="g2.jpg">
        <h5>LEATHER</h5>
        <span>ASSESORIES</span></a>
    </div>
    <div class="our_g3">
        <a href="#" >  <img src="g3.jpg">
        <h5>LEATHER</h5>
        <span>ASSESORIES</span></a>
    </div>
    <div class="our_g4">
        <a href="#" >  <img src="g4.jpg">
        <h5>SPORTS</h5>
        <span>WEAR</span></a>
    </div> 
</div>
<!-- gallery end div coding-->
<!--about us start div coding-->
<div class="about">
<?php 
        include ("connection.php");
        $select_product=mysqli_query($connect, "SELECT * FROM page");
        if(mysqli_num_rows($select_product) > 0);
           while($fetch_product=mysqli_fetch_array($select_product)){
        
        ?>
    <!--about us heading div coding-->
    <div class="pg">
        <h3><?php echo $fetch_product['name']; ?></h3>
        <!--about us start red border div coding-->
        <div class="object">
            <!-- red border on round about --->
     </div>
    </div>
    <!--about us start pic div coding-->
    <div class="photo">
        <!-- fetch img from db -->
            <img src="<?php echo $fetch_product['banner']; ?>">
            <!--about us start paragraph div coding-->
            <div class="paragh" style="width: 55vh; border: none;">
                <p style="border: 10px solid gray;"><?php echo $fetch_product['description']; ?>nt are the main factor in our business principal. If you find us reasonable and according to your kind wish, please do not hesitate to contact us back either by phone, fax, email or mail, then we will send you our valuable catalogues and latest prices for your kind comparison with your local market.</p>
                       <a href="about.php">Read More...</a>
            </div>
    </div>
    <?php } ?>
</div>
<!--about us end div coding-->
<!--feature pro start-->
<div class="features">
    <div class="heading">
        <h3>FEATURE PRODUCTS</h3>
        <hr style="margin-left: 37.5%;">
    </div>
    <div class="link" style="margin-left: 22%;">
        <a href="#">SPORTS WEAR</a>
        <a href="#">FITNESS WEAR</a>
        <a href="#">LEATHER PRODUCTS</a>
        <a href="#">TEXTILE</a>
        <a href="#">BOXING GEAR</a>
        <hr style="width: 88%; margin-left: -6%;">
    </div>
    <!--products starts pics-->
<div class="cats" id="category">
<div class="c1">
<div class="p1">
<img src="p1.webp">
</div>
<div class="cart">
<h5>ZKP Sportswear</h5><br>
<h5>item# 1247</h5><br>
<a href="#"><button>ADD TO INQUIRY</button></a></div>
</div>
<div class="c2">
    <div class="p2">
    <img src="p1.webp">
    </div>
    <div class="cart2">
    <h5>ZKP Sportswear</h5><br>
    <h5>item# 1247</h5><br>
    <a href="#"><button>VIEW DETAILS</button></a></div>
    </div>
    <div class="c3">
        <img src="p3.jpg">
        <h5>SPORTS WEAR</h5>
        </div>
        <div class="c4">
            <div class="p4">
            <img src="p1.webp">
            </div>
            <div class="cart4">
            <h5>ZKP Sportswear</h5><br>
            <h5>item# 1247</h5><br>
            <a href="#"><button>ADD TO INQUIRY</button></a></div>
            </div>
            <div class="c5">
                <div class="p5">
                <img src="p1.webp">
                </div>
                <div class="cart5">
                <h5>ZKP Sportswear</h5><br>
                <h5>item# 1247</h5><br>
                <a href="#"><button>VIEW DETAILS</button></a></div>
                </div>
  
</div>
<!--products end pics-->
</div>
<!--feature pro end-->
<!--web comments-->
<div class="comments">
<img src="comm_pg.jpg">
<div class="head">
    <h3>"WHAT OUR CLIENTS SAY ABOUT US"</h3>
</div>
<div class="com1">
 <h3>Michale Jave</h3> 
 <h4>owner at 7uptheme</h4><br>
 <p>"Create premium quality image to showcase yor poster presentation, website headers, Etsy, Instagram, Facebook or behance projects by just dragging"</p>
</div>
<div class="com2">
    <h3>Michale Jave</h3> 
    <h4>UI/UX Designer</h4><br>
    <p>"Create premium quality image to showcase yor poster presentation, website headers, Etsy, Instagram, Facebook or behance projects by just dragging"</p>
   </div>
   <!--end comments-->
   <!---start mail box-->
   <div class="send">
    <div class="sub">
        <h3 style="color: black;">SUBSCRIBE</h3><h4 style="color: red;"> NEWSLETTER</h4>
        <h5>Subscribe our newsletter and latest update</h5>
    </div>
    <div class="field">
        <form action="" method="">
        <input type="email" name="email" placeholder="Enter Address" required/>
        <button>SUBSCRIBE NOW</button>
    </form>
    </div>
    <div class="footer" id="contactus">
        <div class="contact_form">
        <h1>CONTACT US</h1>
        </div>
        <div class="info">
         <div class="add">
           <i><ion-icon name="location"></ion-icon></i>
            <h3>Address:</h3>
            <h4>Ugoki Road Shahab Pura Sialkot, Pakistan</h4>
         </div>
         <div class="phone">
            <i><ion-icon name="phone-portrait"></ion-icon></i>
            <h3>Phone:  (+92) 75837595 <br> (+92) 9759357457</h3>
            <h4>Ptcl: +92 958497767</h4>
         </div>
         <div class="xyz">
            <i><ion-icon name="mail"></ion-icon></i>
            <h3>Email Address</h3>
            <h4>info@zkpbrothers.com</h4>
         </div>
         <div class="web">
            <i><ion-icon name="globe"></ion-icon></i>
            <h3>Web</h3><br>
            <h4>www.zkpbrothers.com</h4>
         </div>
        </div>
        <!--contact form of data entry -->
        <div class="forms">
            <div class="message">
       <form action="contact_action.php" method="POST">
                <input type="name" name="name" placeholder="Your Name" required/>
                <input type="email" name="email" placeholder="Your Email" required/>
                <input type="text" name="subject" placeholder=" Subject" required/>
                <textarea rows="3" cols="3" name="message" placeholder="Message " required></textarea>
                <button name="submit" type="submit">SEND Message</button>
            </form></div>
        </div>
    </div>
   </div>
   <div class="last">
    <span><strong>Copyrights - All rights Design and Development by </strong> <em> : </em>     <strong> NJ DYNAMIC SOLUTIONS </strong></span>
   </div>


</div><!---outer div end-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</htm>
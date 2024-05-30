<!DOCTYPE html>
<head>
     <title>SPORTS WEAR BP</title>
  <link rel="stylesheet" href="">
  <style>
   *{
    padding: 0;
    margin: 0;
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
.sidebar{
    border: 2px solid none;
    height: 98vh;
    background-color: #008080;
    width: 27%;
  flex: 0 0 300px;
    position: fixed;
    margin: 0;
    border-radius: 0 10% 0 7%;
}
.heading{
    border: 1px solid none;
    height: 20;
    width: 50%;
    color: white;
    margin-top: 15%;
    margin-left: 20%;
  
    position: relative;
}
.heading h3{ 
    margin-top: 12%;
    align-items: center;  
    font-family: sans-serif;
    font-weight: 400;
    font-size: 20px;
    flex: 0 0 20px;
    display: inline-flex;
    color: white;
}
.heading a{
    text-decoration: none;
    color: white;
    cursor:pointer;
}
.links{
   border: 2px solid none;
    height: 70vh;
    width: 39.5vh;
    flex: auto;
    left: -39%;
    position: absolute;
    margin-top: 30%;
}
.icons{
    border: 2px solid none;
    height: 6vh;
    width: 100%;
    cursor: pointer;
    margin-left: 0%;
    display: block;
   margin-top: 0%;
}

.icons a{
    text-decoration: none;
    color: whitesmoke;
}
.icons:hover{
    background-color: #46c2c2;
}
.icons i{
    margin-left: 10%;
    color: whitesmoke;
    margin-top: 3.5%;
    flex: 0 0 300px;
    font-size: 18px;
    position: absolute;
    
    }
    .icons span{
        margin-left: 30%;
        color: whitesmoke;
        margin-top: 3.5%;
        position: absolute;
        flex: 0 0 300px;
        font-size: 15px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;    
        }
.nav{
    border: 2px solid whitesmoke;
    height: 9vh;
    width: 72.3%;
 box-shadow: rgb(19, 31, 61);
    margin-left: 27%;
    border-radius: 12px;
}
.tag h3{
    margin-top: 3%;  
    margin-left: 5%;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 20px;
    color: black;
}
.dashboard{
    border: 2px solid none;
    height: 5%;
    width: 40%;
    margin-left: 28%;
    margin-top: 1.2%;
    position: absolute;
}
.dashboard i{
    color: black;
    margin-left: 10%;
    margin-top: 20%; 
    font-family: sans-serif;
    font-weight: bold; 
    font-size: 22px;
}
.dashboard span{
    color: black;
     margin-left: 10%;
    font-size: 17px; 
    font-family: sans-serif;
    font-weight: 400; 
    margin-top: -7%;
}
.register{
    border: 2px solid whitesmoke;
    height: 55vh;
    width: 60%;
    margin-left: 32%;
    border-radius: 12px;
    margin-top: 7%;
    position: absolute;
}
.box{
    border:none;
    margin-top: 8%;
    width: 25%;
    height: 31%;
    border-radius: 7px;
    margin-left: 5%;
    display: inline-block;
    background-color: cadetblue;
}
.box i{
margin-left: 3%;
color: whitesmoke;
margin-top: 3%;
font-size: 25px;
position: absolute;

}
.box span{
    margin-left: 2%;
    color: whitesmoke;
    margin-top: 12%;
    position: absolute;
    font-size: 12px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;    
    }
.box strong{
   margin-left: 17%;
    color: whitesmoke;
    margin-top: 12%;
    font-size: 15px;
    position: absolute;
  }
</style>
<!--panel styling end-->
</head>
<body>
    <!-- outer div---->
    <div class="outer">
  <div class="sidebar">
  <div class="heading">
        <a href="home_pg.php"><h3 style="  color: white;">ZkpBrothers</h3></a>
        <div class="links">
           <div class="icons" style="   background-color: #46c2c2;">
            <a href="panel.php">
            <i><ion-icon name="home-outline"></ion-icon></i>
            <span>Home</span></a>
         </div>
         <div class="icons">
         <a href="profile.php">
            <i><ion-icon name="person-outline"></ion-icon></i>
            <span>Profile</span>
         </div>
         <div class="icons">
         <a href="inquery.php">
            <i><ion-icon name="help-circle-outline"></ion-icon></i>
            <span>Manage Inquires</span></a>
         </div>
         <div class="icons">
         <a href="news.php">
            <i><ion-icon name="calendar-outline"></ion-icon></i>
            <span>Manage News & Update</span></a>
         </div>
         <div class="icons">
         <a href="product.php">
            <i><ion-icon name="newspaper-outline"></ion-icon></i>
            <span>Manage Products</span></a>
         </div>
         <div class="icons">
         <a href="gallery.php">
            <i><ion-icon name="images-outline"></ion-icon></i>
            <span>Manage Gallery</span></a>
         </div>
         <div class="icons">
         <a href="banner.php">
            <i><ion-icon name="document-text-outline"></ion-icon></i>
            <span>Manage Banner's</span></a>
         </div>
         <div class="icons">
         <a href="pages.php">
            <i><ion-icon name="documents-outline"></ion-icon></i>
            <span>Manage Pages</span></a>
         </div>
         <div class="icons">
         <a href="config.php">
            <i><ion-icon name="settings-outline"></ion-icon></ion-icon></i>
            <span>Website Configuration</span></a>
         </div>
         <div class="icons">
         <a href="logout.php">
            <i><ion-icon name="log-out-outline"></ion-icon></i>
            <span>Logout</span></a>
         </div>
        </div><!--side bar div end-->
    </div>
    
</div>
<div class="nav">
    <div class="tag">
        <h3>Admin Panel</h3>
    </div>
</div>
<!--dashboard heading in content-->
<div class="dashboard">
        <i><ion-icon name="home-outline"></ion-icon></i>
        <span>Home    /     Dashboard</span>
    </div>
    <!-- main content registration/contact us data-->
    <div class="register" style="height: 55vh;">
    <div class="box">
      <i><ion-icon name="person-add"></ion-icon></i>
      <span>Registers</span>
      <strong><?php 
      include ("connection.php");
      $query = mysqli_query($connect, "select count(*) from register");
      $row = mysqli_fetch_array($query);
      echo $row[0];?></strong>
    </div>
    <div class="box" style="background-color: silver;">
      <i><ion-icon name="chatbubbles-outline"></ion-icon></i>
      <span>Contact Us</span>
      <strong style="margin-left: 19%;"><?php 
      
      $query = mysqli_query($connect, "select count(*) from contact_us");
      $row = mysqli_fetch_array($query);
      echo $row[0];?></strong>
    </div>
    <div class="box" style="background-color: pink;">
      <i><ion-icon name="document-text-outline"></ion-icon></i>
      <span>Total Order's</span>
      <strong>21</strong>
    </div>
    <div class="box" style="background-color: rgb(8, 31, 32);">
      <i><ion-icon name="document-outline"></ion-icon></i>
      <span>Total Product</span>
      <strong><?php 
      
      $query = mysqli_query($connect, "select count(*) from product");
      $row = mysqli_fetch_array($query);
      echo $row[0];?></strong>
    </div>
    <div class="box" style="background-color: darkslategray;">
      <i><ion-icon name="document-text-outline"></ion-icon></i>
      <span>Pages</span>
      <strong><?php 
      
      $query = mysqli_query($connect, "select count(*) from page");
      $row = mysqli_fetch_array($query);
      echo $row[0];?></strong>
    </div>
    <!----<div class="box" style="background-color: #008080;">
      <i><ion-icon name="cart-outline"></ion-icon></i>
      <span>Stock In</span>
      <strong>1314</strong>
    </div> ---->
    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
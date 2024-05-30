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
}
.links{
    border: 2px solid none;
    height: 70vh;
    width: 39vh;
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
   margin-top: 0.5%;
   flex: 0 0 300px;
}
/*.icons :active{
    background-color:  #46c2c2;
    color: whitesmoke;
    height: 6vh;
     width: 100%;
    cursor: pointer;
    margin-left: 0%;
}*/
.icons a{
    text-decoration: none;
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
    margin-top: 2%;  
    margin-left: 5%;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 20px;
    color: black;
    position: absolute;
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
    border: 2px solid none;
    height: 100vh;  
    width: 70%;
    margin-left: 28%;
    border-radius: 12px;
    margin-top: 2%;
    flex: 0 0 300px;
 position: absolute;
}
.box{
    border: 2px solid whitesmoke;
    height: 98vh;
    width: 97%;
    margin-left: 3%;
    margin-top: 6%;
    position: absolute;
    display: flex;
    border-radius: 5px;
}
.box strong{
   margin-left: 14%;
    color: black;
    margin-top: 8%;
    font-size: 15px;
    position: absolute;
  }

  </style>
</head>

<body>
    <!-- outer div---->
    <div class="outer">
  <div class="sidebar">
  <div class="heading">
        <a href="home_pg.php"><h3 style="  color: white;">ZkpBrothers</h3></a>
        <div class="links">
           <div class="icons" active="panel.php">
            <a href="panel.php">
            <i><ion-icon name="home-outline"></ion-icon></i>
            <span>Home</span></a>
         </div>
         <div class="icons">
         <a href="profile.php">
            <i><ion-icon name="person-outline"></ion-icon></i>
            <span>Profile</span>
         </div>
         <div class="icons" style="   background-color: #46c2c2;">
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
        <span>Home     /      Manage Inquires </span>
    </div>
    <!-- main content registration/contact us data-->
   
    <div class="register">
    <div class="box">
      <strong>Total of Inquires    :        <?php 
      include ("connection.php");
      $query = mysqli_query($connect, "select count(*) from contact_us");
      $row = mysqli_fetch_array($query);
      echo  $row[0];?></strong>
    </div>
    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
    </html>


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
/*.icons :active{
    background-color: cadetblue;
    color: whitesmoke;
    height: 6vh;
    width: 90%;
    cursor: pointer;
    margin-left: 8%;
}*/
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
    height: 12vh;
    width: 72.3%;
 box-shadow: rgb(19, 31, 61);
    margin-left: 27%;
    border-radius: 12px;
}
.tag h3{
    margin-top: 4%;  
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
    border: 2px solid none;
    height: 70vh;  
    width: 70%;
    margin-left: 28%;
    border-radius: 12px;
    margin-top: 5%;
    flex: 0 0 300px;
 position: absolute;
}
.box form{
    border: 1px solid black;
    height: 75vh;
    width: 50%;
    margin-left: 18%;
    margin-top: 0%;
    position: absolute;
    display: flex;
    border-radius: 5px;
}

.field{
        border: 2px solid none;
        height: 10%;
        width: 100%;
        margin-left: 0%;
        margin-top: 0%;
        position: absolute;
        display: flex;
}
.field h2{
    margin-top: 3%;  
    text-align: center;
    font-family: sans-serif;
    font-weight: 600;
    margin-left: 30%;
    font-size: 20px;
    color: black;
}         
.pro_form{
    border: 2px solid none;
    height: 22%;
    width: 82%;
    margin-left: 8%;
    margin-top: 11%;
    display: grid;
    border-radius: 5px;
}
.pro_form label{
    margin-left: 5%;
    color: black;
    margin-top: 5%;
    display: grid;
    font-size: 17px;
    font-family: 'Gill Sans', 'Gill Sans MT', "Calibri", 'Trebuchet MS', sans-serif;    
}

.pro_form input{
   border: 1px solid whitesmoke;
        width: 250px;
        padding: 15px;
        color: black;
        margin-top: 7%;
        display: grid;
        margin-left: 10%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
}
.prof_formss{
    border: 2px solid none;
    height: 22%;
    width: 82%;
    margin-left: -82%;
    margin-top: 47%;
 position: relative;
    border-radius: 5px;
}
.prof_formss label{
    margin-left: 5%;
    color: black;
    margin-top: 2%;
    
    font-size: 17px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;    
}
.prof_formss textarea{
        border: 1px solid whitesmoke;
        width: 250px;
        padding: 10px;
        color: black;
        margin-top: 7%;
        position: relative;
        margin-left: 11%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
     }
.prof_formss input{
   border: 1px solid whitesmoke;
        width: 250px;
        padding: 15px;
        color: black;
        margin-top: 7%;
        position: relative;
        margin-left: 10%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
}
.pros_formss{
    border: 2px solid none;
    height: 22%;
    width: 82%;
  
    margin-top: 80%;

    border-radius: 5px;
}
.pros_formss label{
    margin-left: 5%;
    color: black;
    margin-top: 2%;
    font-size: 17px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;    
}
.pros_formss input{
   border: 1px solid whitesmoke;
        width: 250px;
        padding: 15px;
        color: black;
        margin-top: 7%;

        margin-left: 10%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
}
.box button{
       border: 1px solid black;
        height: 6vh;
        width: 25%;
        border-radius: 5px;
        text-align: center;
        color: black;
        text-decoration: none;
        background-color: white;
        font-size: 15px;
        font-weight: 100;
        font-family: sans-serif;
        margin-top: 112%;
        margin-left: -50%;
        cursor: pointer;
        align-content: center;
        align-items: center;
    }
    .box button:hover{
    background-color: #008080;
    border: 1px solid #008080;
    color: white;
    border-radius: 5px;
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
         <div class="icons" style="   background-color: #46c2c2;">
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
        <h3>Update Product</h3>
    </div>
</div>
<!--dashboard heading in content-->
<div class="dashboard">
        <i><ion-icon name="home-outline"></ion-icon></i>
        <span>Home     /     Update Product</span>
    </div>
    <!-- main content registration/contact us data-->
    <div class="register">
   
        <div class="box">
        <?php  
       include 'connection.php';
       $id=$_GET['id'];
       $query=mysqli_query($connect, "SELECT * FROM product where id='$id'");
       while($row=mysqli_fetch_array($query)){?>
            <!--update gallery action-->
        <form action="update_gallery_action.php" method="POST" enctype="multipart/form-data">
    <div class="field">
    <h2>Update Product</h2>
 </div>
 <div class="pro_form"> 
  <label>Name</label>
  <input type="name" name="name" value="<?php echo $row['name']; ?>" required/>
 </div>
 <div class="prof_formss">
  <label>Description</label>
  <textarea type="text" name="description" rows="3" cols="4" placeholder="<?php echo $row['description']; ?>" required></textarea> 
 </div>
 <div class="pros_formss" style="  margin-left: -82%;">
  <label>Update New Image</label>
  <input type="file" accept="jpg, webp, png, jpeg" name="image" placeholder="<?php echo $row['image']; ?>" required/>
 </div>
<button type="submit" name="update">Update</button>
</form>
<?php } ?>
    </div>

    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
    </html>
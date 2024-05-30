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
.cats{
   border: none;
   width: 20%;
   height: 8%;
   margin-left: 51%;
   margin-top: 2%;
   position: absolute;
}
.cats a{
   text-decoration: none;
   font-size: 15px;
   font-weight: 600;
   color: black; 
   font-family: sans-serif;
}
.cats a:hover{
   color: red;
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

  .echo{
    border: 4px solid whitesmoke;
    height: auto;
    width: 97%;
    margin-left: 3%;
    margin-top: 5%;
    position: absolute;
    background-color:white;
    border-radius: 5px;
  }
  table{
    border: 1px solid none;
    color: black;
    height: 40vh;
    margin-top: 5%;
    row-gap: 29%;
  }
  .echo td{
    margin-top: 3%;
    text-align: center;
    row-gap: 7%;
  }
  .echo tr:hover{
    border: none;
 background-color: #f0f0f0;
   /* background-color: lightgray; */
  }
  .echo table tr td:hover{
    border-color: #008080;
  }
  .echo table td button{
    border: 1px solid black;
        height: 6vh;
        width: 60%;
        border-radius: 5px;
        text-align: center;
        color: black;
        text-decoration: none;
        background-color: white;
        font-size: 10px;
        font-weight: 100;
        font-family: sans-serif;
       
        cursor: pointer;
  }
  .echo table td button:hover{
    color: white;
    background-color: #008080;
    border: 1px solid #008080;
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
         <div class="icons">
         <a href="gallery.php">
            <i><ion-icon name="images-outline"></ion-icon></i>
            <span>Manage Gallery</span></a>
         </div>
         <div class="icons" style="   background-color: #46c2c2;">
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
    <div class="cats">
    <a href="add_banner.php">Add New Banner</a>
    </div>
</div>
<!--dashboard heading in content-->
<div class="dashboard">
        <i><ion-icon name="home-outline"></ion-icon></i>
        <span>Home     /      Manage Banner's </span>
    </div>
    <!-- main content table of registration data-->
   
    <div class="register">
    
    <div class="echo">
  <table width="600" style="margin-left: 5%;">
    <tr>
  <th>ID</th>
  <th>NAME</th>
 
  <th style="margin-left: 10%; margin-top: 0.5%; position: absolute;">STATUS</th>
   </tr>
   <?php 
    include ("connection.php");
 $a=mysqli_query($connect, "SELECT * FROM product order by id");
    while($row=mysqli_fetch_array($a)){?>
<tr>
  <td style="text-align: center;"><?php echo $row['id']; ?></td>
  <td style="text-align: center;"><?php echo $row['name']; ?></td>
  <td><a href="banner_del.php?id=<?php echo $row['id'];?>"><button type="submit" name="delete">Delete</button></a></td>
  <td><a href=""><button type="submit" name="edit" style="width: 90%; margin-left: 3%;">Update</button></a></td>
   </tr>
   <?php } ?>
  </table>
    </div>
    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
    </html>
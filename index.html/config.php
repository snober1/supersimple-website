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
    height: 190vh;  
    width: 70%;
    margin-left: 28%;
    border-radius: 12px;
    margin-top: 2%;
    flex: 0 0 300px;
 position: absolute;
}
.box{
    border: 2px solid whitesmoke;
    height: 170vh;
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
  form{
   display: flex;
   flex-wrap: wrap;
   gap: 28%;
   border: 2px solid none;
   height: 10vh;
    width: 97%;
   display: inline-block;
   margin-top: 3%;
   margin-left: 3%;
 
}
form label{
border: none;
margin-left: 3%;
margin-top: 2%;
font-size: 17px;
font-weight: 600;
font-family: sans-serif;
}
form input {
        border: 1px solid black;
        width: 450px;
        padding: 15px;
        color: black;
        margin-top: 3%;
       
        margin-left: 12.4%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
     }
     form textarea{
        border: 1px solid black;
        width: 450px;
        padding: 12px;
        color: black;
        margin-top: 5%;
       
        margin-left: 11%;
        background-color: white;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 13px;
     }
     form input:focus{
        border: 1px solid black;
     }
     form::placeholder{
        color: black;
     }
     form button{
        border: 1px solid black;
        height: 8vh;
        width: 15%;
        border-radius: 5px;
        text-align: center;
        color: black;
        background-color: white;
        font-size: 15px;
        font-weight: 100;
        font-family: sans-serif;
        margin-top: 8%;
        margin-left: 30%;
        cursor: pointer;
        align-content: center;
        align-items: center;
    }
    form button:hover{
    border: 1px solid red;
    color: black;
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
         <div class="icons" style="   background-color: #46c2c2;">
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
        <span>Home     /      Site Configuration</span>
    </div>
    <!-- main content registration/contact us data-->
   
    <div class="register">
    <div class="box">
        <!--FORM DETAILS OF SITES-->
        <form action="" method="POST">
     
        <label>Page Title</label>
        <input type="name" name="name" placeholder="Enter Name" required/>
     
     
        <label>Meta Keywords</label>
        <input style="margin-left: 6.5%;" type="text" name="text" placeholder="Enter Meta Keyword" required/>
     
     
        <label style="margin-top: 17%; margin-left: -91%; position: absolute;">Description</label>
        <textarea  style="margin-left: 28%;" type="message" rows="3" cols="570" name="message" placeholder="Enter Descripter" required></textarea> 
     
     
        <label>Product Per Page</label>
        <input style="margin-left: 4.6%;" type="number" name="number" placeholder="Enter Product Per Page" required/>
     
     
        <label style="margin-top: 13.5%; margin-left: -92%; position: absolute;">No. of home product</label>
        <input style="margin-left: 29%;" type="number" name="number" placeholder="Enter No. of home product" required/>
     
     
        <label style="margin-top: 13.5%; margin-left: -92%; position: absolute;">No. of related Product</label>
        <input style="margin-left: 29%;" type="number" name="number" placeholder="Enter No. of related Product" required/>
     
     
        <label style="margin-top: 13.5%; margin-left: -92%; position: absolute;">Email</label>
        <input style="margin-left: 29%;" type="email" name="email" placeholder="Enter Email" required/>
     
     
        <label style="margin-top: 13.5%; margin-left: -92%; position: absolute;">Phone Number</label>
        <input style="margin-left: 29%;" type="int" name="int" placeholder="Enter Phone Number" required/>
     
     
        <label style="margin-top: 17.5%; margin-left: -92%; position: absolute;">Footer Contact</label>
        <textarea  style="margin-left: 28%;" type="message" rows="3" cols="570" name="message" placeholder="Message " required></textarea> 
     
     
        <label style="margin-top: 18.5%; margin-left: -90.5%; position: absolute;">Company Name</label>
        <input  style="margin-left: 29%;" type="name" name="name" placeholder="Enter Company Name" required/>
     
     
        <label style="margin-top: 13.5%; margin-left: -92%; position: absolute;">Facebook</label>
        <input style="margin-left: 29%;" type="link" name="link" placeholder="Enter Facebook Link" required/>
     
     
        <label style=" margin-top: 13.5%; margin-left: -92%; position: absolute;">Twitter</label>
        <input style="margin-left: 29%;" type="link" name="link" placeholder="Enter Twitter Link" required/>
     
     
        <label style=" margin-top: 13.5%; margin-left: -92%; position: absolute;">Instagram</label>
        <input style="margin-left: 29%;" type="link" name="link" placeholder="Enter Instagram Link" required/>
     
     
        <label style=" margin-top: 18.5%; margin-left: -92%; position: absolute;">Footer Legal Text</label>
        <textarea  style="margin-left: 29%;" type="message" rows="3" cols="570" name="message" placeholder="Message " required></textarea> 
     
     <button type="submit" name="submit">SAVED</button>
    
</form>
    </div><!--register end-->

</div><!--outer div-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </body>
    </html>
    
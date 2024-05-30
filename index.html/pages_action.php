<?php
include ("connection.php");
if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $keyword = $_POST['keyword'];
    $des = $_POST['description'];
    $thumb = $_POST['thumb'];
    $banner = $_POST['banner'];
    $query = "INSERT INTO page(name, title, keyword, description, thumb, banner) VALUES ('$name', '$title', '$keyword', '$des', '$thumb', '$banner')";
    if(mysqli_query($connect, $query)){
        header("location:pages.php");
    } else {
        echo "Error: ". $query. "<br>". mysqli_error($connect);
    }
}
?>
<!--pro handling-->
<!-- folder and files arrange like icons.file, index.html style.css etc  -->
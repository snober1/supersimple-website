<!--- Update admin dashboard gallery action--->
<?php
 include ("connection.php");
if($_POST['update']==true); {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    // Validate and sanitize user input
    $id = mysqli_real_escape_string($connect, $id);
    $name = mysqli_real_escape_string($connect, $name);
    $description = mysqli_real_escape_string($connect, $description);
    $image = mysqli_real_escape_string($connect, $image);

    // Update query
    $query = "update product set name='$name', description='$description', image='$image' where id='$id'";
    $result = mysqli_query($connect, $query);
    if($result==true) {
        header("location:gallery.php");
        exit;
    } else {
        echo "Error updating record: ". mysqli_error($connect);
    }
}
?>
<!--end update code-->
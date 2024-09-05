<?php

if(isset($_POST['submit']))
{
    include 'config.php';
    $Name = $_POST['Name'];
    $Image = $_FILES['Image'];
    $image_loc = $_FILES['Image']['tmp_name'];
    $image_name = $_FILES['Image']['name'];
    $img_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    $Category = $_POST['Pages'];

    //insert product
    mysqli_query($con,"INSERT INTO `addphoto`( `Name`, `Image`, `Category`) VALUES ('$Name','$img_des','$Category')");

    header("location:index.php");
}
?>

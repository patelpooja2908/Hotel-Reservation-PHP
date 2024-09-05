<?php
    $Id = $_GET['Id'];
    //echo $Id
    include 'config.php';
    mysqli_query($con," DELETE FROM `addphoto` WHERE Id = $Id ");
    header("location:index.php");

?>
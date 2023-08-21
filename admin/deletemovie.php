<?php

    include "../dbconnection.php";

    $mid=$_GET['mid'];

    $qry="delete from movies where mid='$mid'";
    mysqli_query($conn,$qry);
    echo "<script>window.location='viewmovies.php';</script>";


?>
<?php

    include "../dbconnection.php";

    $sid=$_GET['sid'];

    $qry="delete from shows where sid='$sid'";
    mysqli_query($conn,$qry);
    echo "<script>window.location='viewshows.php';</script>";


?>
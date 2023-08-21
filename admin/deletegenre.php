<?php

    include "../dbconnection.php";

    $gid=$_GET['gid'];

    $qry="delete from genre where gid='$gid'";
    mysqli_query($conn,$qry);
    echo "<script>window.location='viewgenre.php';</script>";


?>
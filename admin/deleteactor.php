<?php

    include "../dbconnection.php";

    $acid=$_GET['acid'];

    $qry="delete from actor where acid='$acid'";
    mysqli_query($conn,$qry);
    echo "<script>window.location='viewactors.php';</script>";


?>
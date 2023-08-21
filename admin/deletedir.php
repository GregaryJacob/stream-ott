<?php

    include "../dbconnection.php";

    $did=$_GET['did'];

    $qry="delete from director where did='$did'";
    mysqli_query($conn,$qry);
    echo "<script>window.location='viewdir.php';</script>";


?>
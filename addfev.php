<?php
session_start();
include'dbcon.php';
$mid=$_POST['mid'];
$types=$_POST['types'];
$user=$_SESSION['user'];

$sql="INSERT INTO `tbl_fev`( `shid`, `user`, `types`, `sts`) 
VALUES ('$mid','$user','$types','1')";
dbset($sql,1);
echo "Added to favorite list";
?>
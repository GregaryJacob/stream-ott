<?php
session_start();
include_once"../dbcon.php";
/**
 * @author lolkittens
 * @copyright 2020
 */
$plam= $_SESSION['planid'];
$dates=date("d-m-Y");
$user=$_SESSION['user'];
$sql = "INSERT INTO `tbl_sub`(`user`, `plan`, `dates`, `status`, `isdel`) VALUES 
('$user','$plam','$dates','1','1')";
$kl=dbset($sql,1);
$sql2 = "UPDATE `tbl_user` SET `types` = '1' WHERE `tbl_user`.`uid` = $user;";
$kl2=dbset($sql2,1);
if($kl==1)
{
    header("location:../settings.php");
}
?>
<?php
session_start();
include"conn.php";
$conn = OpenConn();
$shop_id=$_SESSION['yashshopid'];

if(isset($_POST["ownerdtl"]) && $_POST["ownerdtl"]!="" ) {
    $res=mysqli_query($conn, "UPDATE `shop` SET `ow_name`='".$_POST['ow_name']."',`username`='".$_POST['username']."',`contact`='".$_POST['contact']."' WHERE shop_id=".$shop_id); 
    if($res){header("Location:profilesettings.php");}
}
elseif(isset($_POST["shopdtl"]) && $_POST["shopdtl"]!="" ){   
    $res=mysqli_query($conn, "UPDATE `shop` SET `address`='".$_POST['address']."',`ubi_type`='".$_POST['ubi_type']."',`ubi`='".$_POST['ubi']."',`s_name`='".$_POST['s_name']."' WHERE shop_id=".$shop_id); 
    if($res){header("Location:profilesettings.php?act=2");}
}elseif(isset($_POST["passnew"]) && $_POST["passnew"]!=""){
    $res=mysqli_query($conn, "UPDATE `shop` SET `pass`='".$_POST['pass1']."' WHERE shop_id=".$shop_id); 
    if($res){header("Location:profilesettings.php");}
}   
?>
<?php   
if(isset($_POST["billss"]) && $_POST["billss"]!="") {
    session_start();
    include"conn.php";
    $conn = OpenConn();
    $shop_id=$_SESSION['yashshopid'];

    $rowCount = count($_POST["billss"]);
    $ids = array();
    for($i=0;$i<$rowCount;$i++) {
     $ids[]= $_POST["billss"][$i];
    }
    $i=implode(',', $ids);

   

    $res=mysqli_query($conn, "UPDATE bills SET verified =2 WHERE bill_id IN (".$i.") ");//AND shop_id =".$shop_id



    if($res){header("Location:customers.php");}
}
?>
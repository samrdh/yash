<?php   
if(isset($_POST["billss"]) && $_POST["billss"]!="") {
    session_start();
    include"conn.php";
    $conn = OpenConn();
    $shop_id=$_SESSION['yashshopid'];

    $rowCount = count($_POST["billss"]);
    $ids = array();
    for($i=0;$i<$rowCount;$i++) {
       
       $sql = "SELECT `cs_id`,`points` FROM `bills`  WHERE bill_id='" . $_POST["billss"][$i] . "'";
       //$result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_array(mysqli_query($conn, $sql),MYSQLI_ASSOC);
       $cs_id=$row['cs_id'];$points=$row['points'];
       $r=mysqli_query($conn, "UPDATE cs_shop SET t_points =t_points + '$points' WHERE cs_id='$cs_id'");

     $ids[]= $_POST["billss"][$i];
    }
    $i=implode(',', $ids);

   

    $res=mysqli_query($conn, "UPDATE bills SET verified =1 WHERE bill_id IN (".$i.") ");//AND shop_id =".$shop_id



    if($res){header("Location:verifybills.php");}
}
?>
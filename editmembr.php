<?php
if(isset($_POST["custmr"]) && $_POST["custmr"]!="" && $_POST["typee"]!="") {
session_start();
include"conn.php";
$conn = OpenConn();
$shop_id=$_SESSION['yashshopid'];

    $rowCount = count($_POST["custmr"]);
    $ids = array();
    for($i=0;$i<$rowCount;$i++) {
     $ids[]= $_POST["custmr"][$i];
    }
    $i=implode(',', $ids);
    
      //echo $_POST["typee"];
      //echo $i=implode(',', $ids);
      // cs_shop SET m_id = 3 WHERE cus_id IN (1,2,3,4,5) AND shop_id =1 ;

      $res=mysqli_query($conn, "UPDATE cs_shop SET m_id ='".$_POST["typee"]."' WHERE cus_id IN (".$i.") AND shop_id =".$shop_id);



    if($res){header("Location:customers.php");
    }
}

?>

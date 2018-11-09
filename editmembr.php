<?php
    $rowCount = count($_POST["custmr"]);
    for($i=0;$i<$rowCount;$i++) {
     echo $_POST["custmr"][$i];
      }?><br><?php
      echo $_POST["typee"];

      // cs_shop SET m_id = 3 WHERE cus_id IN (1,2,3,4,5) AND shop_id =1 ;

?>

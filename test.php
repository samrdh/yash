<?php
include"conn.php";
$conn = OpenConn();
$genre = "select * from membership";
$result = $conn->query($genre);



$row = $result->fetch_array(MYSQLI_ASSOC);
printf ($row['type']);

?>
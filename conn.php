<?php
function OpenConn()
{
define('DB_HOST', 'localhvbost');
define('DB_USER', 'rooot');
define('DB_PASSWORD', '');
define('DB_NAME','yash');
$con=new mysqli(DB_HOST, DB_USER, DB_PASSWORD) or die("Connect failed: %s\n". $con -> error);
mysqli_select_db($con, DB_NAME) or die("Connect failed: %s\n". $con -> error);
return $con;
}
function CloseConn($conn)
 {
 $conn -> close();
 }
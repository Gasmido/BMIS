<?php
$sname = "localhost";
$uname = "root";
$passw  ="";
$dbname = "u950419810_brgy";

$connn = mysqli_connect($sname, $uname, $passw, $dbname);

if (!$connn) {
	echo "Connection Failed";
}
?>
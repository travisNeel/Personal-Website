<?php 
session_start(oid)

$uid = $_POST['uid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$query = "SELECT * FROM users WHERE uid='uid' AND pwd='pwd'";
$resut = mysql_connect($query);

if(isset($resut)){
	echo "Connection not made, try again!";
} else {
	SESSION[];
}

 ?>
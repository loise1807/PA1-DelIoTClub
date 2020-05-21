<?php

define('HOST','127.0.0.1');
define('USER','root');
define('PASS','');
define('DB_NAME','del_iot_club');

$host = HOST;
$user = USER;
$pass = PASS;
$db_name = DB_NAME;

$koneksi = mysqli_connect($host,$user,$pass,$db_name);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>

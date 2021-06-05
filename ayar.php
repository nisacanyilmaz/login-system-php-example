<?php
$host="localhost";
$db="mydb";
$user="root";
$pass="";
$baglanti=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");

mysql_select_db($db,$baglanti) or die("Veritabanina Baglanilamadi");
?>
<?php 

include("ayar.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>sayfamiza hosgeldiniz"."<br>";
	echo "<a href=logout.php>cikis</a></center>";
}
ob_end_flush();
?>

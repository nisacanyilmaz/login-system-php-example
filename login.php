<?php 

include("ayar.php");
ob_start();
session_start();

$kullanici = $_POST['kullanici'];
$sifre = $_POST['sifre'];

$sql_check = mysql_query("select * from uyeler where username='".$kullanici."' and pass='".$sifre."'") or die(mysql_error());


if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["username"] = $kullanici;
    $_SESSION["pass"] = $sifre;
    header("Location:anasayfa.php");
}
else {
	 
	echo "kullanici adi veya sifre yanlis.";
 
    header("Refresh:1; url=index.php");
}

ob_end_flush();
?>
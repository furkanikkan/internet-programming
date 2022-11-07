<?php
session_start();

$usera = "furkan";
$sifrea = "123";

$user = $_POST['ad'];
$sifre = $_POST['sifre'];

if (($usera==$user) and ($sifrea==$sifre)) 
{
$_SESSION["Kullanici"]=$user;
header('Location: hesap.php');
}
else 
{
echo "Giriş Hatalı";
}

?>
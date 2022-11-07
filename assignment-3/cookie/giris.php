<?php
$usera = "furkan";
$sifrea = "123";

$user = $_POST['ad'];
$sifre = $_POST['sifre'];

if (($usera==$user) and ($sifrea==$sifre)) 
{
setcookie("Kullanici",$user,time()+5);
header('Location: hesap.php');
}
else 
{
echo "Giriş Hatalı";
}

?>
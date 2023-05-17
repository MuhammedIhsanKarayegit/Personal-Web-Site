<?php

session_start();
ob_start();
include("ayar.php");


if(($_POST["email"]=="g211210023@sakarya.edu.tr") && ($_POST["password"]=="g211210023"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "g211210023@sakarya.edu.tr";
$_SESSION["password"] = "g211210023";

echo "Hosgeldiniz g211210023. Başarıyla giriş yaptınız. Giriş sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh: 2; url=index.html");

}
elseif(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=index.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=index.html");
}


ob_end_flush();

// include("ayar.php");

// session_start();
// ob_start();
// if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
// $_SESSION["login"] = "true";
// $_SESSION["user"] = $user;
// $_SESSION["pass"] = $pass;
// header("Location:admin.php");
// }else{
// echo "Kullancı Adı veya Şifre Yanlış.<br>";
// echo "Giriş sayfasına yönlendiriliyorsunuz.";
// header("Refresh: 2; url=index.php");
// }
// ob_end_flush();

?>
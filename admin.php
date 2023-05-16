<?php
session_start();
if(!isset($_SESSION["login"])){
echo "Hatalı giriş yaptınız.";
}
else{
echo "Giriş işlemi başarılıdır Hoşgeldiniz G201210047 <br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>
<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.html");
ob_end_flush();
?>
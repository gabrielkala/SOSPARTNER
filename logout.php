<?php 
session_start();
session_destroy();

$_SESSION = [];

//supprime les cookies
setcookie('pseudo', '', time()-3600);
setcookie('user_id', '', time()-3600);

header('location: login.php');

?>
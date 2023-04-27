<?php
include('main.php');
$ob->con();
$ob->user_active();
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
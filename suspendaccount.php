<?php
include('main.php');
$ob->con();
$ob->user_suspend();
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
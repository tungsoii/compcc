<?php 
$title = 'Home Page';
ob_start();
include 'home.html.php';
$output = ob_get_clean();
include 'layout.html.php';

?>
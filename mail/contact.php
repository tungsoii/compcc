<?php
if (!isset($_POST['send'])) {
    include 'contact.html.php';
} else {
    $title = $_POST['title'];
    $content = $_POST['content'];
    include 'phpmailer.php';
}
include '../templates/layoutmail.html.php';
?>
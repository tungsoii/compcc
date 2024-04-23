<?php
require "../includes/FunctionLibrary.php";
deleteRecord($pdo, "posts", $_POST['id']);
header('Location: posts.php');
?>
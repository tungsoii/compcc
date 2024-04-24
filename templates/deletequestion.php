<?php
require "../includes/FunctionLibrary.php";
deleteRecord($pdo, "questions", $_POST['id']);
header('Location: questions.php');
?>
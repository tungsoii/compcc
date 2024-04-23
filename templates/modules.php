<?php

try{
    include '../includes/DatabaseConnection.php';

    $sql = 'SELECT * FROM modules
    ORDER BY modules.id DESC
    ';

    $modules = $pdo->query($sql);

    $title = 'Module';

    ob_start();
    include 'modules.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';
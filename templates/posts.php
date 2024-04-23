<?php

try{
    include '../includes/DatabaseConnection.php';

    $sql = 'SELECT posts.id, post_name, post_content, post_image, post_date, `username`, `module_name` FROM posts
    INNER JOIN users
    ON user_id = users.id
    INNER JOIN modules
    ON module_id = modules.id
    ORDER BY posts.id DESC
    ';

    $posts = $pdo->query($sql);

    $title = 'All Posts';

    ob_start();
    include 'templates/posts.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';
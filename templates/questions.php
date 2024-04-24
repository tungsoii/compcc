<?php

try{
    include '../includes/DatabaseConnection.php';

    $sql = 'SELECT questions.id, question_name, question_data, question_img, question_time, `username`, `module_name` FROM questions
    INNER JOIN users
    ON user_id = users.id
    INNER JOIN modules
    ON module_id = modules.id
    ORDER BY questions.id DESC
    ';

    $quests = $pdo->query($sql);

    $title = 'All Posts';

    ob_start();
    include 'questions.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';

<?php
if (!isset($_POST['create'])) {
    try {
        include "../includes/DatabaseConnection.php";
        $user_sql   = 'SELECT * FROM users';
        $module_sql = 'SELECT * FROM modules';
        $users      = $pdo->query($user_sql);
        $modules    = $pdo->query($module_sql);
        $title = 'Create Post';
        ob_start();
        include 'createpost.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
    
    } else { 
    try {
        include '../includes/DatabaseConnection.php';
        $sql = 
        "INSERT INTO posts (post_title, post_content, post_image, post_date, user_id, module_id) 
                    VALUES (:post_title, :post_content, :post_image, :post_date, :user_id, :module_id)";

        $stm = $pdo->prepare($sql);
        $stm->bindValue(":post_title",          $_POST['post_title']);
        $stm->bindValue(":post_content",        $_POST['post_content']);
        $stm->bindValue(":post_image",          $_POST['post_image']);
        $stm->bindValue(":post_date",           $_POST['post_date']);
        $stm->bindValue(":user_id",             $_POST['user_id']);
        $stm->bindValue(":module_id",           $_POST['module_id']);

        $stm->execute();

        header('Location: posts.php');

    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'layout.html.php';

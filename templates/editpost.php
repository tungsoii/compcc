<?php
if (isset($_POST['edit'])) {
    try {
        require 'includes/DatabaseConnection.php';
        $sql = "UPDATE posts
        SET post_title = :post_title,
        post_content = :post_content,
        post_image = :post_image,
        post_date = post_date
        WHERE id = :id";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":post_title",      $_POST['post_title']);
        $stm->bindValue(":post_content",    $_POST['post_content']);
        $stm->bindValue(":post_image",      $_POST['post_image']);
        $stm->bindValue(":post_date",       $_POST['post_date']);
        $stm->bindValue(":user_id",         $_POST['user_id']);
        $stm->bindValue(":module_id",       $_POST['module_id']);
        header('Location: posts.php');
    } catch (PDOException $exception) {
        echo "Connect to DB failed" . $exception;
    }
    }
    else {
    try {
        include 'includes/DatabaseConnection.php';
        $sql = 'SELECT * FROM posts WHERE id = :id';
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":id", $_POST['id']);
        $stm->execute();
        $post = $stm->fetch();
        $title = 'Edit Post';
        ob_start();
        include 'templates/editpost.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'templates/layout.html.php';
?>

<?php
if (isset($_POST['edit'])) {
    try {
        require '../includes/DatabaseConnection.php';
        $sql = "UPDATE posts
        SET post_title = :post_title,
        post_content = :post_content,
        post_image = :post_image,
        post_date = :post_date,
        user_id = :user_id,
        module_id = :module_id
        WHERE id = :id";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":post_title", $_POST['post_title']);
        $stm->bindValue(":post_content", $_POST['post_content']);
        $stm->bindValue(":post_image", $_POST['post_image']);
        $stm->bindValue(":post_date", $_POST['post_date']);
        $stm->bindValue(":user_id", $_POST['user_id']);
        $stm->bindValue(":module_id", $_POST['module_id']);
        $stm->bindValue(":id", $_POST['id']);
        $stm->execute();
        header('Location: posts.php');
    } catch (PDOException $exception) {
        echo "Connect to DB failed: " . $exception->getMessage();
    }
} else {
    try {
        include '../includes/DatabaseConnection.php';
        $sql = 'SELECT * FROM posts WHERE id = :id';
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":id", $_POST['id']);
        $stm->execute();
        $post = $stm->fetch();
        
        // Fetch users and modules for the dropdowns
        $user_sql = 'SELECT id, username FROM users';
        $module_sql = 'SELECT id, module_name FROM modules';
        $users = $pdo->query($user_sql)->fetchAll();
        $modules = $pdo->query($module_sql)->fetchAll();
        
        $title = 'Edit Post';
        ob_start();
        include 'editpost.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'layout.html.php';
?>

<?php
if (isset($_POST['edit'])) {
    try {
        require '../includes/DatabaseConnection.php';
        $sql = "UPDATE questions
                SET question_name = :question_name,
                question_data = :question_data,
                question_img = :question_img,
                question_time = :question_time,
                user_id = :user_id,
                module_id = :module_id
                WHERE id = :id";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":question_name", $_POST['question_name']);
        $stm->bindValue(":question_data", $_POST['question_data']);
        $stm->bindValue(":question_img", $_POST['question_img']);
        $stm->bindValue(":question_time", $_POST['question_time']);
        $stm->bindValue(":user_id", $_POST['user_id']);
        $stm->bindValue(":module_id", $_POST['module_id']);
        $stm->bindValue(":id", $_POST['id']);
        $stm->execute();
        header('Location: questions.php');
        exit(); // Stop execution after redirection
    } catch (PDOException $exception) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $exception->getMessage();
    }
} else {
    try {
        include '../includes/DatabaseConnection.php';
        $sql = 'SELECT * FROM questions WHERE id = :id';
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":id", $_POST['id']);
        $stm->execute();
        $quests = $stm->fetch();
        
        // Fetch users and modules for the dropdowns
        $acc_sql = 'SELECT id, username FROM users';
        $module_sql = 'SELECT id, module_name FROM modules';
        $accs = $pdo->query($acc_sql)->fetchAll();
        $modules = $pdo->query($module_sql)->fetchAll();
        
        $title = 'Edit Post';
        ob_start();
        include 'editquestion.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'layout.html.php';
?>

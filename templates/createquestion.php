<?php
if (!isset($_POST['create'])) {
    try {
        include "../includes/DatabaseConnection.php";
        $acc_sql = 'SELECT * FROM users';
        $module_sql ='SELECT * FROM modules';
        $accs = $pdo->query($acc_sql)->fetchAll();
        $modules = $pdo->query($module_sql)->fetchAll();
        $title = 'Create Post';
        ob_start();
        include 'createquestion.html.php';
        $output = ob_get_clean();
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
    
} else { 
    try {
        include '../includes/DatabaseConnection.php';
        $sql = "INSERT INTO questions (question_name, question_data, question_img, question_time, user_id, module_id) VALUES (:question_name, :question_data, :question_img, :question_time, :user_id, :module_id)";

        $stm = $pdo->prepare($sql);
        $stm->bindValue(":question_name", $_POST['question_name']);
        $stm->bindValue(":question_data", $_POST['question_data']);
        $stm->bindValue(":question_img", $_POST['question_img']);
        $stm->bindValue(":question_time", $_POST['question_time']);
        $stm->bindValue(":user_id", $_POST['user_id']);
        $stm->bindValue(":module_id", $_POST['module_id']);

        $stm->execute();

        header('Location: questions.php');

    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
include 'layout.html.php';
?>

<?php
include 'DatabaseConnection.php';

function deleteRecord ($pdo, $table, $id) {
    $sql = "DELETE FROM $table WHERE id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(":id", $id);
    $stm->execute();
    echo "Delete record succeed !";
}

?>
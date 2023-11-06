<?php
include 'db_conn.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $type = $_POST['type_of_expenses'];
    $desc = $_POST['description'];
    $amount = $_POST['amount'];

    $sql = "UPDATE expenses SET type_of_expenses = '$type', description = '$desc', amount = '$amount' WHERE id = $id";

    if($conn -> query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating client: " . $conn -> error;
    }
}

$conn -> close();
?>
<?php
include 'db_conn.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type_of_expenses'];
    $desc = $_POST['description'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO expenses (type_of_expenses, description, amount) VALUES ('$type', '$desc', '$amount')";

    if($conn -> query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
}

$conn -> close();
?>
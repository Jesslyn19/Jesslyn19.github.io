<?php
include 'db_conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM expenses WHERE id = $id";

    if($conn -> query($sql) === TRUE) {
        echo "Client deleted successfully.";
        header("Location: index.php");
    } else {
        echo "Error deleting client: " . $conn -> error;
    }
} else {
    echo "Invalid request.";
}

$conn -> close();
?>
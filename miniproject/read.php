<?php
include 'db_conn.php';

$sql = "SELECT * FROM expenses";
$result = $conn -> query($sql);
$a = 1;
$total = 0;

if($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $a . "</td>";
        echo "<td>" . $row["type_of_expenses"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>RM " . $row["amount"] . "</td>";
        $total += $row["amount"];
        echo "<td>RM " . $total . "</td>";
        echo "<td>
                <a href = 'update_form.php?id=" . $row["id"] . "'class = 'btn btn-warning'>Edit &#x1F58A</a>
                <a href = 'delete.php?id=" . $row["id"] . "'class = 'btn btn-danger'>Delete &#x1F5D1</a>
            </td>";
        echo "</tr>";
        $a++;
    }
}

else {
    echo "No clients found.";
}

$conn -> close();
?>
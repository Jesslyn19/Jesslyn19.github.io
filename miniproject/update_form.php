<!DOCTYPE html>
<html>
    <head>
        <title>Edit Expenses</title>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "container">
            <h2>Edit Expenses</h2>
            <?php
            include 'db_conn.php';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM expenses WHERE id = $id";
                $result = $conn -> query($sql);

                if($result -> num_rows > 0) {
                    $row = $result -> fetch_assoc();
                    ?>
                    <form method = "post" action = "update_process.php">
                        <input type = "hidden" name = "id" value = "<?php echo $row['id'];?>">
                        <?php

                        if($row['type_of_expenses'] == "Education") {
                            ?>
                            <div class = "form-check">
                            <label style = "text-indent:-15%;"><b>Type of Expenses</b></label><br>
                            <input type = "radio" id = "education" name = "type_of_expenses" value = "Education" class = "form-check-input" required checked>
                            <label for = "education" class = "form-check-label">Education</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "social" name = "type_of_expenses" value = "Social" class = "form-check-input" required>
                            <label for = "social" class = "form-check-label">Social</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "pets" name = "type_of_expenses" value = "Pets" class = "form-check-input" required>
                            <label for = "pets" class = "form-check-label">Pets</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "family" name = "type_of_expenses" value = "Family" class = "form-check-input" required>
                            <label for = "family" class = "form-check-label">Family</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required>
                            <label for = "others" class = "form-check-label">Others</label>
                            </div>
                            <?php
                        } else if ($row['type_of_expenses'] == "Social") {
                            ?>
                            <div class = "form-check">
                            <label style = "text-indent:-15%;"><b>Type of Expenses</b></label><br>
                            <input type = "radio" id = "education" name = "type_of_expenses" value = "Education" class = "form-check-input" required>
                            <label for = "education" class = "form-check-label">Education</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "social" name = "type_of_expenses" value = "Social" class = "form-check-input" required checked>
                            <label for = "social" class = "form-check-label">Social</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "pets" name = "type_of_expenses" value = "Pets" class = "form-check-input" required>
                            <label for = "pets" class = "form-check-label">Pets</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "family" name = "type_of_expenses" value = "Family" class = "form-check-input" required>
                            <label for = "family" class = "form-check-label">Family</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required>
                            <label for = "others" class = "form-check-label">Others</label>
                            </div>
                            <?php
                        } else if ($row['type_of_expenses'] == "Pets") {
                            ?>
                            <div class = "form-check">
                            <label style = "text-indent:-15%;"><b>Type of Expenses</b></label><br>
                            <input type = "radio" id = "education" name = "type_of_expenses" value = "Education" class = "form-check-input" required>
                            <label for = "education" class = "form-check-label">Education</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "social" name = "type_of_expenses" value = "Social" class = "form-check-input" required>
                            <label for = "social" class = "form-check-label">Social</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "pets" name = "type_of_expenses" value = "Pets" class = "form-check-input" required checked>
                            <label for = "pets" class = "form-check-label">Pets</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "family" name = "type_of_expenses" value = "Family" class = "form-check-input" required>
                            <label for = "family" class = "form-check-label">Family</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required>
                            <label for = "others" class = "form-check-label">Others</label>
                            </div>
                            <?php
                        } else if ($row['type_of_expenses'] == "Family") {
                            ?>
                            <div class = "form-check">
                            <label style = "text-indent:-15%;"><b>Type of Expenses</b></label><br>
                            <input type = "radio" id = "education" name = "type_of_expenses" value = "Education" class = "form-check-input" required>
                            <label for = "education" class = "form-check-label">Education</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "social" name = "type_of_expenses" value = "Social" class = "form-check-input" required>
                            <label for = "social" class = "form-check-label">Social</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "pets" name = "type_of_expenses" value = "Pets" class = "form-check-input" required>
                            <label for = "pets" class = "form-check-label">Pets</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "family" name = "type_of_expenses" value = "Family" class = "form-check-input" required checked>
                            <label for = "family" class = "form-check-label">Family</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required>
                            <label for = "others" class = "form-check-label">Others</label>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class = "form-check">
                            <label style = "text-indent:-15%;"><b>Type of Expenses</b></label><br>
                            <input type = "radio" id = "education" name = "type_of_expenses" value = "Education" class = "form-check-input" required>
                            <label for = "education" class = "form-check-label">Education</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "social" name = "type_of_expenses" value = "Social" class = "form-check-input" required>
                            <label for = "social" class = "form-check-label">Social</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "pets" name = "type_of_expenses" value = "Pets" class = "form-check-input" required>
                            <label for = "pets" class = "form-check-label">Pets</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "family" name = "type_of_expenses" value = "Family" class = "form-check-input" required>
                            <label for = "family" class = "form-check-label">Family</label>
                            </div>
                            <div class = "form-check">
                            <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required checked>
                            <label for = "others" class = "form-check-label">Others</label>
                            </div>
                            <?php
                        }?>
                        <br>
                        <div class = "form-group">
                            <label><b>Description</b></label>
                            <textarea name = "description" rows = "10" cols = "50" class = "form-control" required><?php echo $row['description']; ?></textarea>
                        </div>
                        <br>
                        <div class = "form-group">
                            <label><b>Amount</b></label>
                            <input type = "number" step = ".01" value = "<?php echo $row['amount']; ?>" name = "amount" class = "form-control" required>
                        </div>
                        <button type = "submit" class = "btn btn-primary">Update expenses</button>
                    </form>
                <?php
                } else {
                    echo "Client not found.";
                }
            } else {
                echo "Invalid request.";
            }
            $conn -> close();
            ?>
        </div>
    </body>
</html>
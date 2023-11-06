<!DOCTYPE html>
<html>
    <head>
        <title>Add Expenses</title>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "container">
            <form method = "post" action = "create_process.php">
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
                    <input type = "radio" id = "others" name = "type_of_expenses" value = "Others" class = "form-check-input" required>
                    <label for = "others" class = "form-check-label">Others</label>
                </div>
                <br>
                <div class = "form-group">
                    <label><b>Description</b></label>
                    <textarea name = "description" rows = "10" cols = "50" class = "form-control" required></textarea>
                </div>
                <br>
                <div class = "form-group">
                    <label><b>Amount</b></label>
                    <input type = "number" step = ".01" name = "amount" value = "RM " class = "form-control" required>
                </div>
                <button type = "submit" class = "btn btn-primary">Add expenses</button>
            </form>
        </div>
    </body>
</html>
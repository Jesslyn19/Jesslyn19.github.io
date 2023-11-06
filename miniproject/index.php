<!DOCTYPE html>
<html>
    <head>
        <title>Expenses Tracking System&#x270D</title>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-image: url(https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMTUxYzA3YjUwZDA3NDIyZjQyM2JmMmY4ZTljMDRkNjNkNzYwMjhmNCZlcD12MV9pbnRlcm5hbF9naWZzX2dpZklkJmN0PXM/26BRyql7J3iOx875u/giphy.gif);
            }
            table, td, th {  
                border: 4px solid snow;
                border-radius:20px;
                border-style: groove;
                background-color: lightyellow;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <h2 style="text-align:center;background-color: beige;">
                <marquee width="60%" direction="left" scrollamount="5">Drop down your expenses!</marquee>
                <img src = "https://media.tenor.com/C56y6_iHzA0AAAAi/notes-write.gif" width = "100px" height = "100px">
            </h2>
            <a href = "create_form.php" class = "btn btn-success">+Expenses&#x270D</a><br></br>

            <table class = "table">
                <tr>
                    <th style = "width: 2%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Num</th>
                    <th style = "width: 10%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Type of Expenses</th>
                    <th style = "width: 48%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Description</th>
                    <th style = "width: 10%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Amount</th>
                    <th style = "width: 10%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Total expenses</th>
                    <th style = "width: 20%;font-family:'Brush Script MT', cursive;font-size:180%;vertical-align:middle;text-align:center;">Action</th>
                </tr>
                <tbody style = "font-family:verdana;">
                    <?php
                        include 'read.php';
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
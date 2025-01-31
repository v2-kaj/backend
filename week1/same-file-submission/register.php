<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
</head>
<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"]=="GET"){
    ?>
    <h1>Register Student</h1>
    <form action="" method="POST">
        <br>
        <input type="text" name="student_firstname" placeholder=" Firstname">
        <br>
        <br>
        <input type="text" name="student_lastname" placeholder="Surname">
        <br>
        <br>
        <input type="submit" value="Register">
        </form>
    <?php
        } elseif($_SERVER["REQUEST_METHOD"]=="POST"){
            $student_firstname = $_POST["student_firstname"];
            $student_lastname = $_POST["student_lastname"];

            echo "<h1>".htmlspecialchars($student_firstname)." is successfully registered.</h1>";
        }
    ?>
    
</body>
</html>
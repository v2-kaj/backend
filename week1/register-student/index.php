<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="register-student.php" method="POST">
        First Name
        <br>
        <input type="text" name="student_first_name">
        <br>
        <br>
        Last name
        <br>
        <input type="text" name="student_last_name">
        <br>
        <br>
        <input type="radio" name="student_gender" value="Male">Male
        <input type="radio" name="student_gender" value="Male">Female
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
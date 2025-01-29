<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processor</title>
</head>
<body>

    <?php
        // htmlspecialchars() helps to prevent xss attacks
        $student_name = $_POST["student_name"];
        echo "<h1>Hello ".htmlspecialchars($student_name)."</h1>";
    ?>
    <a href="hello.php">Back</a>
</body>
</html>
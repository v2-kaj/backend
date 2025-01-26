<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Statement</title>
</head>
<body>
    <?php
    
        // Exit the loop when $i is 5
        for ($i = 0; $i < 10; $i++) {
            if ($i == 5) {
               break;  // exit the loop
            }
            echo $i . "<br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue Statement</title>
</head>
<body>
    <?php

        // Skip the iteration when $i is 5
        for ($i = 0; $i < 10; $i++) {
            if ($i == 5) {
                continue;  // Skip 5
            }
            echo $i . "<br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <ol>
    <?php
        $users = array("ron", "harry", "hermione",);
        forEach($users as $user ){
            echo "<li>".$users."</li>";
        }    
    ?>
    </ol>
</body>
</html>
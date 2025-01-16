<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>

<body>
    <?php

        $marks = 20;

        if($marks < 50){
            echo "Fail";
        }
        elseif($marks < 60){
            echo "Pass";
        }
        elseif($marks < 75){
            echo "Merit";
        }
        elseif($marks <=100 ){
            echo "Distinction";
        }
        else{
            echo "Error: Invalid marks";
        }
        
    ?>

</body>

</html>
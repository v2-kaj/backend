<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $student_first_name = $_POST["student_first_name"];
            $student_last_name = $_POST["student_last_name"];
            $student_gender = $_POST["student_gender"];
            
            echo "First Name: ".htmlspecialchars($student_first_name)."<br>";
            echo "Surname: ".htmlspecialchars($student_last_name)."<br>";
            echo "Gender: ".htmlspecialchars($student_gender)."<br>"; 
        }else{
            echo "Oops! Invalid Request Method";
        }
    ?>
   
    


    
</body>
</html>
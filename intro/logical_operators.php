<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>

<body>

    <?php
        
        $role = "manager";
        $is_logged_in = true;
    
        // Check if user is logged in and has the role of manager
        if ($is_logged_in && $role == "manager") {
            echo "Welcome, Manager\n";  // Output: Welcome, Manager
        } else {
            echo "Access Denied\n";
        }
    
        $role = "cashier";
        $is_logged_in = false;
    
        // Check if user is logged in and has the role of cashier
       

    
        // Logical OR example: Allow either admin or manager to access
        $role = "admin";
        $is_logged_in = true;
        
    
    ?>
</body>

</html>
<?php
     include 'db2.php';

          ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);
     session_start();
     
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $qry = $conn->prepare("SELECT * FROM project WHERE username=? AND password=?");
        $qry->bind_param("ss", $username, $password);
        $qry->execute();
        $result = $qry->get_result();
        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form> 
        <a href="register.php">Register</a>    
</body>
</html>
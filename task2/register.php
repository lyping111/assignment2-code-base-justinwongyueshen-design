<?php
     include 'db2.php';

     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);
     session_start();

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $username = $_POST["username"];
         $password = $_POST["password"];
         $confirm_password = $_POST["confirm_password"];
         
         if ($password === $confirm_password) {
             $qry=$conn->prepare("INSERT INTO project (username, password) VALUES (?, ?)");
             $qry->bind_param("ss", $username, $password);
             if ($qry->execute() === TRUE) {
                 echo "Registration successful!";
             } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
             }
         } else {
             echo "Passwords do not match.";
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
 <h2>Register</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
       
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Register">
        </form>
        <a href="login.php">Login</a>
</body>
</html>



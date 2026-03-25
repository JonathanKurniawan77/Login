<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<style>
    body{
        padding: 80px;
    }

    .container {
        width: 100%;
        max-width: 400px;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
    }
    .halo{
        font-size: 24px;
        margin-bottom: 20px;
    }

    .logout a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="container">
        <div class="halo">
            <h2>Welcome to Dashboard</h2>
            <p>Hi <?php echo $_SESSION["username"]; ?>!</p>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    </center>
    
</body> 
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === "mohit" && $pass === "1234") {
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid credentials'); window.location='login.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Gym Management System</h1>
    </div>

    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <input type="text" name="user" class="input-field" placeholder="Username" required>
            <input type="password" name="pass" class="input-field" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
        <a href="#" class="forgot-link">Forgot Password?</a>
    </div>
</div>

</body>
</html>

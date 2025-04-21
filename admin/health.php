<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Status</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Health Status</h1>
    </div>

    <div class="dashboard">
        <p>This page stores health details of members.</p>
    </div>
</div>

</body>
</html>

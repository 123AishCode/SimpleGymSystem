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
    <title>Members</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Members</h1>
    </div>

    <div class="dashboard">
        <p>This page lists all registered gym members.</p>
    </div>
</div>

</body>
</html>

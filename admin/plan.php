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
    <title>Plan</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Membership Plans</h1>
    </div>

    <div class="dashboard">
        <p>This page lets you view or modify membership plans.</p>
    </div>
</div>

</body>
</html>

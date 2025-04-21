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
    <title>Payments</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Payments</h1>
    </div>

    <div class="dashboard">
        <p>This page displays and manages member payments.</p>
    </div>
</div>

</body>
</html>

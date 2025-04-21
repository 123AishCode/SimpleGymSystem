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
    <title>Overview</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>System Overview</h1>
    </div>

    <div class="dashboard">
        <p>This page gives an overview of gym activity and data.</p>
    </div>
</div>

</body>
</html>

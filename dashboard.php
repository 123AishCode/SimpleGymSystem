<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/dashboard.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Welcome, <?php echo $user; ?>!</h1>
    </div>

    <div class="dashboard">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="admin/new_entry.php">New Registration</a></li>
            <li><a href="admin/payments.php">Payments</a></li>
            <li><a href="admin/members.php">Members</a></li>
            <li><a href="admin/health.php">Health Status</a></li>
            <li><a href="admin/plan.php">Plan</a></li>
            <li><a href="admin/overview.php">Overview</a></li>
            <li><a href="admin/exercise.php">Exercise Routine</a></li>
            <li><a href="admin/profile.php">Profile</a></li>
            <li><a href="admin/logout.php">Logout</a></li>
        </ul>
    </div>
</div>

</body>
</html>

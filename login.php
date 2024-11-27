<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1>Welcome, <?php echo $user['username']; ?>!</h1>
    <p>Total Files: <?php echo $user['total_files']; ?></p>
    <p>Total Downloads: <?php echo $user['total_downloads']; ?></p>
</body>
</html>

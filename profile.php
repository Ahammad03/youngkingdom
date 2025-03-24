<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION['username']; ?>! This is your profile page.</h2>
<a href="dashboard.php">Go to Dashboard</a> | <a href="logout.php">Logout</a>
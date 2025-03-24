<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<h2>Settings Page</h2>
<p>Here, you can update your preferences.</p>

<a href="dashboard.php">Go to Dashboard</a> | <a href="logout.php">Logout</a>
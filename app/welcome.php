<?php
if (!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>You have successfully logged in to our vulnerable application.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

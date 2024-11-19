<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: home.php"); // Redirect to home page if session does not exist
    exit();
}

// Retrieve user data from session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($user['first_name']); ?>!</h2>
<p><strong>First Name:</strong> <?php echo htmlspecialchars($user['first_name']); ?></p>
<p><strong>Last Name:</strong> <?php echo htmlspecialchars($user['last_name']); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>

<form action="logout.php" method="POST">
    <button type="submit">Sign Out</button>
</form>
</body>
</html>

<?php
include "db.php";
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h1>
<a href="logout.php">Logout</a>
</body>
</html>

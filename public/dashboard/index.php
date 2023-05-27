<?php
session_start();
if(!isset($_SESSION['login_user'])) {
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h2>Selamat datang <?php echo $_SESSION['login_user']; ?>!</h2>
    <a href="../logout.php">Logout</a>
</body>
</html>

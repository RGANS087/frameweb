<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <div class="input-group">
                <button class="btn"><a href="../" style="text-decoration:none; color:white;" target="blank">Halaman Utama</a></button>
            </div>
        <form action="logout.php" method="POST" class="login-email">
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../error");
    exit();
}

// Cek apakah pengguna adalah admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../error");
    exit();
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch active users
$sql = "SELECT username FROM aktif";
$result = $conn->query($sql);

$activeUsers = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $activeUsers[] = $row['username'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylead.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="head">
        <p class="dash"><i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Admin</p>
        <div class="logout">
            <a href="logout.php" class="logout-button"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </div>
    <div class="body">
        <section class="secta" style="background: #2d2d2d; padding: 30px; border-radius: 8px; margin-bottom: 20px; margin-right: 1.5%;">
        <h1 style="color: white;">User Aktif:</h1><br>
        <ul style="color: white;" class="user">
            <?php foreach ($activeUsers as $user): ?>
                <li><?php echo htmlspecialchars($user); ?></li>
            <?php endforeach; ?>
        </ul>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
    Swal.fire({
        icon: 'info',
        title: 'SELAMAT DATANG',
        text: 'Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>'
    });
    </script>
</body>
</html>

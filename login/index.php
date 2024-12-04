<?php
include 'config.php';
session_start();

// Inisialisasi variabel untuk pesan kesalahan
$errormsg = false;

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: ../admin");
        exit();
    } elseif ($_SESSION['role'] == 'user') {
        header("Location: berhasil_login.php");
        exit();
    }
}


if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Periksa apakah pengguna adalah admin
    $stmt_admin = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt_admin->bind_param("ss", $username, $password);
    $stmt_admin->execute();
    $result_admin = $stmt_admin->get_result();

    if ($result_admin->num_rows > 0) {
        $row = $result_admin->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = 'admin'; // Set role admin

        // Hapus sesi lama dari tabel aktif
        $stmt_delete = $conn->prepare("DELETE FROM adminac WHERE username = ?");
        $stmt_delete->bind_param("s", $row['username']);
        $stmt_delete->execute();

        // Simpan sesi baru ke tabel aktif
        $stmt_insert = $conn->prepare("INSERT INTO adminac (username, password) VALUES (?, ?)");
        $stmt_insert->bind_param("ss", $row['username'], $row['password']);
        $stmt_insert->execute();

        header("Location: ../admin");
        exit();
    } else {
        // Periksa jika pengguna adalah pengguna biasa
        $stmt_user = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt_user->bind_param("ss", $username, $password);
        $stmt_user->execute();
        $result_user = $stmt_user->get_result();

        if ($result_user->num_rows > 0) {
            $row = $result_user->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = 'user'; // Set role user

            // Hapus sesi lama dari tabel aktif
            $stmt_delete = $conn->prepare("DELETE FROM aktif WHERE username = ?");
            $stmt_delete->bind_param("s", $row['username']);
            $stmt_delete->execute();

            // Simpan sesi baru ke tabel aktif
            $stmt_insert = $conn->prepare("INSERT INTO aktif (username, password) VALUES (?, ?)");
            $stmt_insert->bind_param("ss", $row['username'], $row['password']);
            $stmt_insert->execute();

            header("Location: berhasil_login.php");
            exit();
        } else {
            $errormsg = true; // Username atau password salah
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p><br>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <i class="fa fa-eye" id="eye" style="cursor: pointer;"></i>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register">Register</a></p><br><br>
            <p class="login-register-text" align="center"><a href="../">Home Page</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
    <?php
    if ($errormsg) {
        echo "Swal.fire({
          icon: 'error',
          title: 'Login Gagal',
          text: 'Username atau password salah!'
        });";
    }
    ?>

    const eyeIcon = document.getElementById('eye');
        const passwordInput = document.getElementById('password');

        eyeIcon.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

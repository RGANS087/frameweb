<?php
include '../config.php';
session_start();

// Redirect jika sudah login
if (isset($_SESSION['username'])) {
    header("Location: ../berhasil_login.php");
    exit();
}

// Inisialisasi variabel
$done = $error = $double_email = $notvalid = false;

if (isset($_POST['submit'])) {
    // Ambil input dan sanitasi
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Validasi input
    if ($password === $cpassword) {
        // Cek apakah email sudah terdaftar
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            // Simpan pengguna baru
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute()) {
                $done = true;
            } else {
                $error = true;
            }
        } else {
            $double_email = true;
        }

        $stmt->close();
    } else {
        $notvalid = true;
    }
}

$conn->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES); ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="../">Login</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Your custom script -->
    <script>
    <?php
    if ($done) {
        echo "Swal.fire({
          icon: 'success',
          title: 'SELAMAT',
          text: 'Pendaftaran Anda Berhasil'
        });";
    }
    if ($error) {
        echo "Swal.fire({
          icon: 'error',
          title: 'WOOPS',
          text: 'Terjadi kesalahan'
        });";
    }
    if ($double_email) {
        echo "Swal.fire({
          icon: 'error',
          title: 'WOOPS',
          text: 'Email sudah terdaftar'
        });";
    }
    if ($notvalid) {
        echo "Swal.fire({
          icon: 'error',
          title: 'WOOPS',
          text: 'Password tidak cocok'
        });";
    }
    ?>
    </script>
</body>
</html>

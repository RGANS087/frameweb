<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../../login/index.php");
    exit(); // Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Kelas 11 SMK</title>
    <link rel="stylesheet" href="style.css"> <!-- Tautkan ke file CSS -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <header>
        <h1>Belajar Membuat Aplikasi Berbasis Android Menggunakan Kodular</h1>
        <p>Materi kodular kelas 11</p>
    </header>
    
    <main>
        <section>
            <h2>Video Tutorial</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_lkZmV7MqPQ?si=MryhhLUUb-nbNQPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p><strong>Tonton video di atas dan praktekkan</strong></p>
        </section>

        <section>
            <h2>Pengenalan Kodular</h2>
            <p>Kodular adalah platform pembuat aplikasi Android yang memungkinkan pengguna untuk membuat aplikasi tanpa perlu menulis kode secara langsung. Platform ini menyediakan antarmuka grafis yang memungkinkan pengguna untuk menggabungkan berbagai komponen aplikasi dengan menggunakan blok pemrograman.</p>

            <h3>Fitur Utama Kodular</h3>
            <ul>
                <li><strong>Antarmuka Drag-and-Drop:</strong> Memudahkan pengguna dalam mendesain aplikasi dengan menarik dan menjatuhkan komponen.</li>
                <li><strong>Komponen Kustom:</strong> Menyediakan berbagai komponen kustom yang dapat digunakan untuk menambah fungsionalitas aplikasi.</li>
                <li><strong>Blok Pemrograman:</strong> Menggunakan blok pemrograman untuk menambahkan logika ke dalam aplikasi, yang membuat pemrograman menjadi lebih intuitif.</li>
                <li><strong>Integrasi dengan Google Services:</strong> Mendukung integrasi dengan layanan Google seperti Firebase dan AdMob.</li>
            </ul>
        </section>

        <section>
            <h2>Langkah-langkah Membuat Aplikasi dengan Kodular</h2>
            <h3>1. Membuat Proyek Baru</h3>
            <p>Untuk memulai, buka Kodular Creator dan buat proyek baru. Beri nama proyek Anda dan pilih template atau mulai dari awal.</p>

            <h3>2. Mendesain Antarmuka</h3>
            <p>Gunakan antarmuka drag-and-drop untuk menambahkan elemen ke layar aplikasi Anda. Anda dapat menambahkan tombol, label, gambar, dan komponen lainnya.</p>

            <h3>3. Menambahkan Logika</h3>
            <p>Tambahkan logika aplikasi dengan menggunakan blok pemrograman. Blok-blok ini mengatur bagaimana aplikasi berperilaku saat interaksi pengguna terjadi.</p>

            <h3>4. Menguji Aplikasi</h3>
            <p>Gunakan fitur Live Testing untuk menguji aplikasi Anda secara langsung di perangkat Android Anda. Anda dapat melihat perubahan secara real-time dan melakukan debugging jika diperlukan.</p>

            <h3>5. Mempublikasikan Aplikasi</h3>
            <p>Setelah aplikasi siap, Anda dapat mengunduh file APK dan mempublikasikannya di Google Play Store atau platform distribusi aplikasi lainnya.</p>
        </section>
    </main>
</body>
</html>

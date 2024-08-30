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
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <header>
        <h1>Belajar Query MySQL Dasar</h1>
        <p>Materi kelas 11 SMK</p>
    </header>
    <main>
        <section>
            <h2>1. CREATE - Menambahkan Data</h2>
            <p>
                Perintah <code>INSERT</code> digunakan untuk menambahkan data baru ke dalam tabel. Berikut adalah cara menggunakan perintah ini:
            </p>
            <h3>Syntax Dasar:</h3>
            <pre><code>INSERT INTO nama_tabel (nama_field1, nama_field2, ...) VALUES (nilai1, nilai2, ...);</code></pre>
            
            <h3>Contoh Penggunaan:</h3>
            <p>Untuk menambahkan data berikut:</p>
            <ul>
                <li>Nama: Salsabila</li>
                <li>Kota: Yogyakarta</li>
                <li>Negara: Indonesia</li>
            </ul>
            <pre><code>INSERT INTO customers (nama, kota, negara) VALUES ("Salsabila", "Yogyakarta", "Indonesia");</code></pre>
        </section>
        
        <section>
            <h2>2. READ - Menampilkan Data</h2>
            <p>
                Perintah <code>SELECT</code> digunakan untuk menampilkan data dari tabel. Anda dapat menggunakan perintah ini untuk menampilkan semua data atau data tertentu sesuai kebutuhan.
            </p>
            <h3>Syntax Dasar:</h3>
            <pre><code>SELECT * FROM nama_tabel;</code></pre>
            <p>Atau, untuk memilih kolom tertentu:</p>
            <pre><code>SELECT nama_field1, nama_field2 FROM nama_tabel;</code></pre>
            
            <h3>Contoh Penggunaan:</h3>
            <p>Untuk menampilkan semua data dari tabel <code>customers</code>:</p>
            <pre><code>SELECT * FROM customers;</code></pre>
            <p>Atau, untuk menampilkan nama dan kota saja:</p>
            <pre><code>SELECT nama, kota FROM customers;</code></pre>
            
            <h3>Menggunakan Kondisi:</h3>
            <p>Anda bisa menambahkan kondisi menggunakan <code>WHERE</code> untuk menampilkan data yang lebih spesifik:</p>
            <pre><code>SELECT * FROM nama_tabel WHERE kondisi;</code></pre>
            <p>Contoh:</p>
            <pre><code>SELECT * FROM customers WHERE kota = "Yogyakarta";</code></pre>
        </section>
        
        <section>
            <h2>3. UPDATE - Memperbarui Data</h2>
            <p>
                Perintah <code>UPDATE</code> digunakan untuk memperbarui data yang sudah ada dalam tabel.
            </p>
            <h3>Syntax Dasar:</h3>
            <pre><code>UPDATE nama_tabel SET nama_field = nilai_baru WHERE kondisi;</code></pre>
            
            <h3>Contoh Penggunaan:</h3>
            <p>Untuk memperbarui nama pelanggan dengan ID 4 menjadi 'Salsabila':</p>
            <pre><code>UPDATE customers SET nama = 'Salsabila' WHERE id = 4;</code></pre>
            <p>Pastikan untuk menggunakan <code>WHERE</code> agar hanya record yang sesuai yang diperbarui.</p>
        </section>
        
        <section>
            <h2>4. DELETE - Menghapus Data</h2>
            <p>
                Perintah <code>DELETE</code> digunakan untuk menghapus data dari tabel. Hati-hati saat menggunakan perintah ini, pastikan kondisi yang diberikan benar agar tidak menghapus data yang tidak diinginkan.
            </p>
            <h3>Syntax Dasar:</h3>
            <pre><code>DELETE FROM nama_tabel WHERE kondisi;</code></pre>
            
            <h3>Contoh Penggunaan:</h3>
            <p>Untuk menghapus pelanggan dari kota "Yogyakarta":</p>
            <pre><code>DELETE FROM customers WHERE kota = "Yogyakarta";</code></pre>
            <p>Gunakan <code>WHERE</code> untuk menentukan baris yang akan dihapus dan hindari penghapusan seluruh data secara tidak sengaja.</p>
        </section>
    </main>
</body>
</html>

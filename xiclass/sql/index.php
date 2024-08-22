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
    <link rel="stylesheet" href="cpp.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <table>
        <tr>
            <td class="isi">
                <h1 align="center">Belajar Query MySQL Dasar</h1>
                <h2>1. SELECT & WHERE</h2><br>
                <p align="justify">
                    <h3>Perintah SELECT pada MySQL</h3>
    <p>Perintah <code>SELECT</code> pada MySQL digunakan untuk menampilkan data dari tabel yang ada di database. Perintah ini dapat digunakan untuk menampilkan data dari tabel secara keseluruhan atau data yang lebih spesifik dengan menggunakan ekspresi.</p>

    <h4>Syntax Dasar:</h4>
    <pre><code>SELECT * FROM nama_tabel</code></pre>
    <p>atau</p>
    <pre><code>SELECT nama_field, nama_field, nama_field FROM nama_tabel</code></pre>

    <h4>Contoh Penggunaan:</h4>
    <pre><code>SELECT * FROM customers;</code></pre>
    <p>atau</p>
    <pre><code>SELECT nama, kota FROM customers;</code></pre>

    <p>Dalam beberapa kasus, ketika seorang programmer ingin menampilkan data yang spesifik, perintah <code>SELECT</code> digunakan bersama dengan kondisi. Ini umumnya diawali dengan perintah <code>WHERE</code> diikuti dengan kondisi seperti <code>AND</code>, <code>OR</code>, <code>LIKE</code>, <code>BETWEEN</code>, <code>IN</code>, <code>NOT IN</code>, dan lain sebagainya.</p>

    <h4>Syntax Dasar dengan Kondisi:</h4>
    <pre><code>SELECT field / * FROM nama_tabel WHERE kondisi</code></pre>

    <p>Perintah di atas adalah syntax dasar yang dapat digunakan untuk menampilkan data dengan kondisi tertentu.</p>
                </p><br>
                <h2>2. INSERT</h2>
                <p>
                    <h3>Perintah INSERT, UPDATE, dan DELETE pada MySQL</h3>
    
    <h4>1. INSERT</h4>
    <p>Menambahkan data ke dalam tabel MySQL merupakan aktivitas yang umum dilakukan. Untuk menambah data, kita menggunakan query <code>INSERT</code>.</p>
    
    <h5>Syntax Dasar:</h5>
    <p>Tanpa mendefinisikan nama field:</p>
    <pre><code>INSERT INTO nama_tabel VALUES ("nilai_masukan", "nilai_masukan", "dst");</code></pre>
    
    <p>Dengan mendefinisikan nama field:</p>
    <pre><code>INSERT INTO nama_tabel ("nama_field", "nama_field", "dst") VALUES ("nilai_masukan", "nilai_masukan", "dst");</code></pre>
    
    <h5>Contoh Penggunaan:</h5>
    <p>Memasukkan data berikut ke dalam tabel:</p>
    <ul>
        <li>Nama: Salsabila</li>
        <li>Kota: Yogyakarta</li>
        <li>Negara: Indonesia</li>
    </ul>
    <pre><code>INSERT INTO customers VALUES ("", "Salsabila", "Yogyakarta", "Indonesia");</code></pre>
    <p>Atau</p>
    <pre><code>INSERT INTO customers ("nama", "kota", "negara") VALUES ("Salsabila", "Yogyakarta", "Indonesia");</code></pre>
    
    <h4>2. UPDATE</h4>
    <p>Query <code>UPDATE</code> digunakan untuk memperbarui data pada tabel MySQL.</p>
    
    <h5>Syntax Dasar:</h5>
    <pre><code>UPDATE nama_tabel SET nama_kolom = data_baru WHERE kondisi</code></pre>
    <ul>
        <li><code>nama_tabel</code>: Nama tabel yang record/barisnya akan diperbarui.</li>
        <li><code>nama_kolom</code>: Nama kolom yang akan di-update.</li>
        <li><code>data_baru</code>: Nilai baru untuk kolom tersebut.</li>
        <li><code>kondisi</code>: Kondisi atau syarat dari baris yang akan diubah.</li>
    </ul>
    
    <h5>Contoh Penggunaan:</h5>
    <pre><code>UPDATE customers SET nama = 'Salsabila' WHERE id = '4';</code></pre>
    <p>Pastikan untuk selalu menggunakan <code>WHERE</code> untuk menghindari perubahan pada seluruh record.</p>
    
    <h4>3. DELETE</h4>
    <p>Query <code>DELETE</code> digunakan untuk menghapus record dari tabel. Anda dapat menghapus satu data atau lebih dengan query ini.</p>
    
    <h5>Syntax Dasar:</h5>
    <pre><code>DELETE FROM nama_tabel WHERE kondisi</code></pre>
    <ul>
        <li><code>nama_tabel</code>: Nama tabel dari mana record akan dihapus.</li>
        <li><code>kondisi</code>: Kondisi yang menentukan baris yang akan dihapus.</li>
    </ul>
    
    <h5>Contoh Penggunaan:</h5>
    <pre><code>DELETE FROM customers WHERE negara = "Indonesia";</code></pre>
    <p>Seperti halnya dengan <code>UPDATE</code>, selalu sertakan <code>WHERE</code> untuk mencegah penghapusan seluruh record.</p>
</body>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>

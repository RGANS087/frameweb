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
    <title>Materi Kelas 12 SMK</title>
    <link rel="stylesheet" href="cpp.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
    <table>
        <tr>
            <td class="isi">
                <h1 align="center">Cara Membuat Tabel HTML</h1>
                <p align="justify">
                    <h2>1.  Pahami Komponen Tabel HTML</h2>
                    Cara pertama yang bisa kamu lakukan adalah dengan memahami komponen apa saja yang ada di dalamnya. Tiap tabel mempunyai empat bagian yakni sel, baris, kolom, dan border. 
                    Sel merupakan kotak kecil yang terdapat di dalam tabel yang akan kamu buat. Setiap kotak tersebut bisa kamu isi dengan berbagai elemen, mulai dari huruf, angka, atau bahkan gambar. 
                    Kemudian, ada baris. Baris sendiri adalah deretan sel yang terdapat di dalam sebuah tabel. Kolom adalah bagian yang vertikal dari sebuah tabel, isinya adalah sel-sel sejajar. 
                    Sementara border adalah garis bagian tepi di sebuah tabel. Border mengelilingi tiap baris, kolom, dan sel. Tujuan dari garis tepi ialah membantu para pengunjung website untuk melihat batas antara informasi di tiap tabel.

                    <h2>2. Pahami Tag Khusus</h2>
                    Selain harus memahami apa saja komponen di dalam tabel HTML, kamu juga harus memahami tag khusus, ya. Pada umumnya, terdapat beberapa tag khusus yang akan membantu kamu untuk mengatur dan membuat tabel. Berikut di antaranya.
                    <p><strong>&lt;table&gt;</strong></p>
    <p>Tag ini digunakan untuk mendefinisikan bagian awal dan akhir dari sebuah tabel. Semua elemen tabel, seperti baris dan sel, harus berada di dalam tag ini.</p>
    <p>Contoh Penggunaan:</p>
    <pre><code>&lt;table&gt;
    &lt;!-- Elemen tabel lainnya akan berada di sini --&gt;
&lt;/table&gt;</code></pre>

    <p><strong>&lt;tr&gt;</strong></p>
    <p>Tag ini digunakan untuk mendefinisikan baris di dalam tabel. Setiap baris dalam tabel harus diletakkan di dalam tag ini.</p>
    <p>Contoh Penggunaan:</p>
    <pre><code>&lt;tr&gt;
    &lt;!-- Sel dalam baris ini akan berada di sini --&gt;
&lt;/tr&gt;</code></pre>

    <p><strong>&lt;th&gt;</strong></p>
    <p>Tag ini digunakan untuk mendefinisikan sel header di tabel. Biasanya, sel header berisi teks yang dicetak tebal dan diletakkan di tengah.</p>
    <p>Contoh Penggunaan:</p>
    <pre><code>&lt;th&gt;Header Tabel&lt;/th&gt;</code></pre>

    <p><strong>&lt;td&gt;</strong></p>
    <p>Tag ini digunakan untuk mendefinisikan sel di dalam tabel. Setiap sel tabel menggunakan tag ini dan dapat diisi dengan berbagai elemen seperti teks, gambar, atau angka.</p>
    <p>Contoh Penggunaan:</p>
    <pre><code>&lt;td&gt;Isi Sel&lt;/td&gt;</code></pre>

                </p>
            </td>
        </tr>
    </table>
</body>
</html>

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
    <style>
/* Reset margin and padding for a consistent look */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Ensure padding and border do not add to width */
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #1e1e1e;
    color: #dcdcdc;
    line-height: 1.6;
}

header {
    background-color: #333;
    color: #f1f1f1;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2em;
}

header p {
    font-size: 1.2em;
}

main {
    padding: 20px;
}

.container {
    width: 80%;
    margin: 0 auto;
}

section {
    background: #2d2d2d;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}

h1, h2, h3 {
    color: #4CAF50;
}

h2 {
    margin-top: 10px;
    margin-bottom: 15px;
}

pre {
    background-color: #1e1e1e;
    color: #f8f8f2;
    border-radius: 4px;
    padding: 15px;
    overflow-x: auto;
    white-space: pre-wrap;
    margin: 15px 0;
    border: 1px solid #444;
}

ul {
    margin-left: 20px;
}

code {
    font-family: 'Courier New', Courier, monospace;
}
    </style>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
<header>
        <div class="container">
            <h1>Web Development</h1>
            <p>Materi Kelas 12 SMK</p>
        </div>
    </header>
    <main>
        <div class="container">
            <section>
                <h1 align="center">Cara Membuat Tabel HTML</h1>
                <p align="justify">
                    <h2>1. Pahami Komponen Tabel HTML</h2>
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
                <h2>3. Contoh Tabel Lengkap</h2>
                <p>Berikut adalah contoh tabel lengkap dengan berbagai elemen yang telah disebutkan:</p>
                <pre><code>&lt;table border="1"&gt;
    &lt;tr&gt;
        &lt;th&gt;Header 1&lt;/th&gt;
        &lt;th&gt;Header 2&lt;/th&gt;
        &lt;th&gt;Header 3&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Data 1&lt;/td&gt;
        &lt;td&gt;Data 2&lt;/td&gt;
        &lt;td&gt;Data 3&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Data 4&lt;/td&gt;
        &lt;td&gt;Data 5&lt;/td&gt;
        &lt;td&gt;Data 6&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
                <p>Penjelasan contoh tabel di atas:</p>
                <ul>
                    <li><strong>Border:</strong> Atribut `border="1"` digunakan untuk memberikan garis tepi pada tabel.</li>
                    <li><strong>&lt;tr&gt;:</strong> Mendefinisikan baris dalam tabel.</li>
                    <li><strong>&lt;th&gt;:</strong> Mendefinisikan sel header yang biasanya berisi teks cetak tebal dan rata tengah.</li>
                    <li><strong>&lt;td&gt;:</strong> Mendefinisikan sel data dalam tabel.</li>
                </ul>
            </section>
        </div>
    </main>
</body>
</html>

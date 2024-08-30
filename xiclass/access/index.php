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
        <h1>MICROSOFT ACCESS</h1>
        <p>Materi Kelas 11 SMK</p>
    </header>
    <main class="container">
        <section>
            <h1 class="centered">MEMBUAT DATABASE MENGGUNAKAN MICROSOFT ACCESS</h1>
        </section>
        <section>
            <h2>Membuat Basis Data</h2>
            <p>
                <img src="../../assets/access/bab1/1.jpg" alt="Tampilan awal Microsoft Access" class="img"><br><br>
                1. Klik tab File dan pilih "New". Basis data adalah tempat penyimpanan data Anda dalam berbagai bentuk. Anda bisa memilih untuk membuat basis data kosong, atau memilih dari template yang sudah ada.<br><br>
                <img src="../../assets/access/bab1/2.jpg" alt="Memilih template Microsoft Access" class="img"><br><br>
                2. Pilih template atau pilih Blank database. Basis data kosong adalah basis data standar Access, dan dianjurkan untuk penggunaan lokal. Membuat basis data lokal akan menyertakan sebuah tabel. Anda boleh mengeklik template mana saja untuk melihat pratinjau dan memeriksa kesesuaiannya lebih lanjut. Template adalah basis data yang telah didesain untuk berbagai penggunaan, seperti manajemen pekerjaan, inventori, data siswa, dan manajemen proyek.<br><br>
                <img src="../../assets/access/bab1/3.jpg" alt="Menamai basis data" class="img"><br><br>
                3. Berilah nama pada basis data dan klik Create. Anda juga bisa mengubah lokasi penyimpanan berkas sekarang, atau tetap menyimpannya di folder untuk Microsoft Access.
                <ul>
                    <li>Tergantung template yang Anda pilih, Anda mungkin akan diminta membuat log masuk ke basis data. Anda bisa menambahkan kode sandi log masuk saat membuatnya.</li>
                </ul><br><br>
                <img src="../../assets/access/bab1/3.jpg" alt="Memahami berkas Access" class="img"><br><br>
                4. Pahami berkas Access. Basis data Access adalah berkas yang menyimpan seluruh informasi data Anda. Anda selanjutnya bisa menyimpan dan mengerjakan data dengan beragam cara.
                <ul>
                    <li><strong>Table</strong> - Tabel adalah cara utama penyimpanan data dalam basis data Anda. Tabel dapat dibandingkan dengan lembar kerja di Excel: data diatur dalam kolom dan tabel. Mengimpor data dari Excel dan program pengolah angka lainnya adalah proses yang mudah.</li>
                    <li><strong>Form</strong> - Form adalah cara menambah data pada basis data. Meskipun Anda bisa menambah data ke basis data langsung pada tabel, penggunaan form akan mempercepat pemasukan data secara visual.</li>
                    <li><strong>Report</strong> - Laporan berguna untuk merangkum dan menampilkan data dari basis data. Laporan digunakan untuk menganalisis data dan menjawab pertanyaan tertentu, seperti berapa banyak keuntungan yang dihasilkan, atau di mana kebanyakan pelanggan berada. Laporan didesain untuk dicetak.</li>
                    <li><strong>Query</strong> - Query adalah cara Anda menerima dan memilah data. Anda dapat menggunakannya untuk menampilkan entri tertentu dari berbagai tabel. Anda juga bisa menggunakan query untuk menambah dan memperbarui data.</li>
                </ul>
            </p>
        </section>
        <section>
            <h2>Membuat Tabel</h2>
            <p>
                <img src="../../assets/access/bab2/1.jpg" alt="Membuat tabel baru" class="img"><br><br>
                1. <strong>Buatlah tabel.</strong> Saat menambahkan data ke dalam basis data, Anda perlu membuat satu tabel untuk tiap data yang Anda catat. Misalnya, Anda bisa mencatat informasi kontak konsumen di dalam satu tabel dan produk yang dijual di dalam tabel lain. Jika Anda mulai membuat basis data dengan basis data kosong, Anda akan secara otomatis memulainya dengan tabel kosong. Anda bisa mulai memasukkan data ke dalam tabel ini secara manual maupun dengan menyalin dan menempel dari sumber lain.<br>
                <ul>
                    <li>Untuk membuat tabel baru, klik tab <strong>Create</strong> kemudian <strong>klik Table</strong>. Anda juga bisa mengeklik <strong>Table Design</strong> pada tab yang sama untuk membuat tabel di Design View, yang memungkinkan Anda memiliki kontrol yang lebih besar atas desain tabel.</li>
                </ul><br><br>
                <img src="../../assets/access/bab2/2.jpg" alt="Menambahkan field pada tabel" class="img"><br><br>
                2. Tambahkan field pada tabel. Field pada dasarnya adalah kepala kolom yang berisi satu tipe data seperti nama, usia, atau alamat. Masing-masing field memiliki tipe data seperti "Short Text," "Currency," atau "Long Date," yang kemudian diaplikasikan ke nilai di dalamnya. Untuk menamai field, klik ganda kemudian ketikkan nama.
                <ul>
                    <li>Anda bisa menerapkan tipe data pada field tertentu dengan mengeklik menu Table fields di bagian atas, memilih More fields, kemudian mengeklik tipe data yang Anda inginkan.</li>
                    <li>Misalnya, jika Anda membuat field bernama "Telepon" untuk mencatat nomor telepon konsumen, Anda sebaiknya mengatur tipe data "Telepon" di dalam kolom agar sesuai dengan format nomor ponsel.</li>
                    <li>Field ID, yang merupakan kolom pertama, digunakan untuk menyimpan kunci yang dapat mengidentifikasi secara unik masing-masing baris (record) data di dalam basis data Access.</li>
                </ul><br><br>
                <img src="../../assets/access/bab2/3.jpg" alt="Memasukkan nilai field" class="img"><br><br>
                3. Masukkan nilai field. Nilai field adalah data individual yang dimasukkan ke dalam field. Masing-masing "cell" adalah nilai field yang berisi informasi relatif terhadap field (kolom) yang diisinya. Misalnya, pada field "Telepon" masing-masing nilai field di dalam kolom tersebut adalah nomor-nomor telepon berbeda.<br>
                <ul>
                    <li>Masing-masing baris disebut sebagai record. Saat Anda membuat record baru dengan menambahkan field, nomor ID akan muncul di kolom ID. Anda bisa menggunakan nomor ID tersebut sebagai referensi atas suatu record secara khusus.</li>
                </ul>
            </p>
        </section>
    </main>
</body>
</html>

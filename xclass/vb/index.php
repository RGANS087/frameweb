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
    <title>Materi Kelas 10 SMK</title>
    <link rel="stylesheet" href="cpp.css">
</head>
<body>
    <table>
        <tr>
            <td class="isi">
                <h1 align="center">VISUAL BASIC</h1>
                <h3>Sejarah Visual Basic</h3><br>
                <p align="justify">
                    Diluncurkan pertama kali pada tahun 1991, Visual Basic diciptakan dengan tujuan menyederhanakan proses pemrograman aplikasi berbasis Windows.

Versi awal Visual Basic berfokus pada kemudahan penggunaan, memudahkan developer dengan sedikit pengalaman programming bisa membangun aplikasi fungsional. Seiring waktu, Visual Basic berkembang menjadi bahasa yang lebih kuat dan fleksibel, dengan dukungan untuk object-oriented programming (OOP) dan kemampuan mengembangkan aplikasi kompleks.

Pada tahun 1998, Microsoft merilis Visual Basic 6.0, versi terakhir sebelum transisi ke .NET Framework. Visual Basic 6.0 menjadi sangat populer di kalangan developer karena kemudahannya dalam membuat aplikasi berbasis Windows. Namun, untuk mengikuti perkembangan teknologi dan memperluas kemampuannya, Microsoft memperkenalkan Visual Basic .NET sebagai bagian dari inisiatif .NET Framework.

Visual Basic .NET menawarkan banyak perbaikan dan fitur baru, termasuk dukungan penuh untuk OOP dan integrasi yang lebih baik dengan teknologi web.

Meskipun Visual Basic .NET berbeda secara signifikan dari pendahulunya dalam hal sintaks dan paradigma pemrograman, warisan Visual Basic sebagai alat pengembangan aplikasi yang mudah dan cepat tetap terjaga. Visual Basic terus berkembang, dengan versi terbaru yang terus diperbarui oleh Microsoft, menawarkan kemampuan modern dan dukungan untuk pengembangan aplikasi cross-platform.
                </p><br><br>
                <h3>Fitur-fitur Visual Basic</h3><br>
                <p>
                  <ul>
                    <li>GUI yang intuitif: Visual Basic menyediakan lingkungan pengembangan visual yang membantu developer merancang UI aplikasi secara intuitif. Dengan teknik drag-and-drop, developer dapat dengan mudah menempatkan kontrol seperti tombol, kotak teks, dan label pada form, tanpa perlu menulis banyak kode.</li>
                    <li>Object-oriented programming (OOP): meskipun versi awal Visual Basic didasarkan pada pemrograman prosedural, Visual Basic .NET sepenuhnya mendukung konsep pemrograman berorientasi objek, termasuk class, inheritance, polimorfisme, dan enkapsulasi. Ini memungkinkan pengembangan aplikasi yang lebih terstruktur dan mudah untuk di-maintain.</li>
                    <li>Komponen dan kontrol yang dapat digunakan kembali: Visual Basic berfungsi untuk menggunakan dan membuat komponen serta kontrol yang dapat digunakan kembali, meningkatkan produktivitas dan mempercepat proses pengembangan. Misalnya, komponen ActiveX dapat diintegrasikan ke dalam aplikasi Visual Basic untuk menambahkan fungsionalitas khusus.</li>
                    <li>VB runtime dan .NET Framework: aplikasi yang dikembangkan dengan Visual Basic memerlukan VB runtime atau .NET Framework untuk dijalankan. Ini memastikan aplikasi bisa berjalan dengan stabil dan efisien di lingkungan Windows.</li>
                    <li>Component Object Model (COM) integration: Visual Basic mendukung integrasi dengan teknologi COM, memungkinkan aplikasi untuk berinteraksi dengan komponen software lain yang dibuat di berbagai bahasa pemrograman, meningkatkan interoperabilitas dan fleksibilitas.</li>
                    <li>Dukungan untuk pengembangan web app dan desktop: dengan Visual Basic .NET, developer dapat membuat web app menggunakan ASP.NET serta aplikasi desktop tradisional. Ini memberikan fleksibilitas dalam memilih target platform untuk aplikasi.</li>
                  </ul>
                </p><br>
                <h3>Belajar Visual Basic untuk Membuat Program Pertama</h3>
    <p>Untuk menjadi seorang programmer yang ahli, profesional, dan berpengalaman, Anda perlu memulai dari dasar. Visual Basic adalah alat pengembangan (Development Tool) yang dapat digunakan untuk membuat berbagai program komputer. Mari kita mulai dengan membuat program pertama Anda yang menampilkan pesan “Hello world! Ini program pertama saya.”</p>
    
    <h4>Langkah-langkah Membuat Program Pertama di Visual Basic:</h4>
    <ol class="steps">
        <li><strong>Buka Visual Basic 6.0:</strong> Mulailah dengan membuka program Visual Basic versi 6.0 di komputer Anda.</li>
        <li><strong>Buat Proyek Baru:</strong> Pilih tab <code>New</code> dan pilih <code>Standard EXE</code>. Klik tombol <code>Open</code>.</li>
        <li><strong>Tambahkan Command Button ke Form:</strong> Di bagian <code>Tool Box</code>, pilih <code>Command Button</code>. Klik dua kali pada objek <code>Command Button</code> untuk menambahkannya ke Form. Sebagai alternatif, Anda bisa memilih objek <code>Command Button</code>, lalu klik dan tahan di lokasi yang diinginkan di Form untuk menempatkannya.</li>
        <li><strong>Tulis Kode Program:</strong> Klik dua kali pada objek <code>Command1</code> di Form. Ini akan membuka jendela <code>Code Window</code>. Di <code>Code Window</code>, tuliskan kode berikut:
            <pre><code>Private Sub Command1_Click()
    MsgBox "Hello world! Ini program pertama saya"
End Sub</code></pre>
        </li>
        <li><strong>Jalankan Program:</strong> Tekan tombol <code>F5</code> pada keyboard untuk menjalankan program. Jika tidak ada kesalahan, program Anda akan tampil. Klik tombol <code>Command1</code> dan pesan “Hello world! Ini program pertama saya” akan muncul.</li>
    </ol>
    
    <h4>Kenapa Visual Basic?</h4>
    <ul>
        <li><strong>Kemudahan Penggunaan:</strong> Visual Basic menggunakan bahasa yang sederhana dan berbasis kata-kata berbahasa Inggris yang umum, sehingga mudah dipahami dan digunakan.</li>
        <li><strong>Pengembangan Cepat:</strong> Lingkungan Visual Basic memungkinkan pembuatan aplikasi Windows dengan cepat dan mudah. Anda bisa membuat aplikasi berbasis mouse dengan berbagai fitur.</li>
        <li><strong>Popularitas dan Kenyamanan:</strong> Visual Basic adalah salah satu bahasa pemrograman yang paling populer karena kemudahannya dan kenyamanan penggunaannya.</li>
    </ul>
    
    <h4>Kesimpulan</h4>
    <p>Visual Basic adalah alat pembuatan program yang lengkap dan mudah digunakan, bahkan bagi pemula. Jika Anda dapat menggunakan Windows, maka Anda juga dapat membuat program dengan Visual Basic. Anda hanya perlu memahami dasar-dasar pemrograman, manipulasi jendela, dan penggunaan mouse.</p>
    <p>Dengan Visual Basic, Anda dapat mulai membuat aplikasi dengan cepat dan mengembangkan keterampilan pemrograman Anda ke tingkat yang lebih lanjut.</p>
            </td>
        </tr>
    </table>
</body>
</html>

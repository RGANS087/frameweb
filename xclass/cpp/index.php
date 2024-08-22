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
                <h1 align="center">C++</h1>
                <h3>Apa itu Bahasa Pemrograman C++?</h3><br>
                <p align="justify">
                    C++ adalah bahasa yang bisa digunakan untuk membuat berbagai aplikasi. Misalnya, aplikasi pengolah gambar, software gadget, game, hingga sistem operasi baru.
                    Bahasa ini dikembangkan dari bahasa pemrograman C. Tak heran kalau dua bahasa ini memiliki sintaks dan struktur kode yang sama. Bedanya, C++ merupakan Object Oriented Programming (OOP) sedangkan C merupakan bahasa pemrograman prosedural.
                    Artinya, bahasa pemrograman C++ memiliki data dan function yang disatukan dalam kelas dan objek untuk bekerjasama memecahkan sebuah masalah. Jadi ketika Anda ingin mengubah fungsi, tidak perlu mengubah keseluruhan program. Dengan begitu, pengubahan kode akan lebih fleksibel.
                    Hal ini tidak bisa dilakukan dalam bahasa pemrograman C yang bersifat prosedural, di mana data dan function terpisah dan harus dibaca satu persatu oleh compiler. Sehingga ketika Anda ingin mengubah fungsi, Anda perlu mengubah keseluruhan program.
                    Sejak awal dirancang pada tahun 1983, bahasa pemrograman C++ terus berkembang hingga di versi terbaru C++17 yang dirilis pada tahun 2017. Meskipun ada beberapa versi, konsep dasarnya sama sehingga Anda tak perlu bingung manakah yang akan digunakan.
                </p><br><br>
                <h3>Cara Melakukan Deklarasi dan Inisialisasi</h3><br>
                <p>
                    Deklarasi dilakukan sebelum program dimulai. Namun, Anda juga bisa melakukan deklarasi di tengah program. Akan tetapi, deklarasi harus sudah selesai sebelum Anda menggunakan program. Berikut ini adalah contoh deklarasi:
                    <pre><code>
int i;      // contoh deklarasi
char c; 
int i, j, k;  // banyak deklarasi
                    </code></pre>
                    Sedangkan inisialisasi artinya mengisi nilai di dalam variabel yang sudah dideklarasikan. Contohnya seperti ini:
                    <pre><code>
int i;   // deklarasi
i = 10;  // inisialisasi
                    </code></pre>
                    Jika dilakukan secara bersamaan, hasilnya seperti ini:
                    <pre><code>
int i = 10;         // contoh deklarasi dan inisialisasi 
int i = 10, j = 11;
                    </code></pre>
                    Jika Anda melakukan deklarasi tanpa inisialisasi, atau melakukan deklarasi ulang pada variabel yang ada dalam satu cakupan, maka akan muncul error. Contohnya seperti ini:
                    <pre><code>
int i, j;
i = 10;
j = 20;
int j = i + j;   // compile time error
                    </code></pre>
                    Seluruh variabel yang Anda tulis memiliki cakupan fungsinya masing-masing. Artinya, variabel tidak akan berfungsi jika Anda menuliskannya di luar cakupan. Cakupan suatu variabel biasanya berupa kurung kurawal.
                    Ada dua cakupan dalam bahasa C++, yaitu Variabel Global dan Variabel Lokal.
                    Variabel global adalah variabel yang ketika Anda deklarasikan, bisa digunakan lagi dalam class dan function apapun selama program masih berjalan. Variabel ini dideklarasikan di luar function main(). Contohnya seperti ini:
                    <pre><code>
#include &lt;iostream&gt;
using namespace std;
int x;                // Deklarasi variabel global 
int main()
{
    x = 10;                 // inisialisasi pertama
    cout << "first value of x = " << x;
    x = 20;                 // inisialisasi kedua
    cout << "diinisialisasi lagi dengan value = " << x;
}
                    </code></pre>
                    Sedangkan variabel lokal adalah variabel yang hanya bisa berfungsi jika dideklarasikan di dalam function main(). Artinya, jika dideklarasikan di luar main() maka Anda akan menemui error.
                    <pre><code>
#include &lt;iostream&gt;
using namespace std;
int main()
{
    int i = 10;
    if (i < 20)        // batas awal cakupan
    {
        int n = 100;   // variabel lokal dideklarasikan dan diinisialisasi
    }              // batas akhir cakupan
    cout << n;      // Compile time error
}
                    </code></pre>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>

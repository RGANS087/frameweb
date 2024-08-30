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

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <style>
 /* Reset margin and padding for a consistent look */
* {
    margin: 0;
    padding: 0;
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

h2 {
    color: #4CAF50;
    margin-bottom: 15px;
    margin-top: 10px;
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
</head>
<body>
<header>
        <div class="container">
            <h1>C++ Programming Dasar</h1>
            <p>Materi Kelas 10 SMK</p>
        </div>
    </header>
    <main>
        <div class="container">
            <section>
                <h1>Contoh Program Java</h1>

                <h2>1. Mencari Bilangan Prima</h2>
                <p>Program ini digunakan untuk mencari bilangan prima di antara dua bilangan. Berikut adalah kode program Java untuk mencari bilangan prima:</p>

                <pre><code>import java.util.Scanner;

public class BilanganPrima {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan bilangan awal: ");
        int awal = input.nextInt();

        System.out.print("Masukkan bilangan akhir: ");
        int akhir = input.nextInt();

        for (int i = awal; i <= akhir; i++) {
            boolean isPrima = true;
            for (int j = 2; j < i; j++) {
                if (i % j == 0) {
                    isPrima = false;
                    break;
                }
            }
            if (isPrima) {
                System.out.print(i + " ");
            }
        }
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Import Scanner:</strong> <code>import java.util.Scanner;</code> – Mengimpor kelas <code>Scanner</code> dari paket <code>java.util</code> untuk membaca input dari pengguna.</li>
                    <li><strong>Kelas BilanganPrima:</strong> <code>public class BilanganPrima</code> – Mendefinisikan kelas <code>BilanganPrima</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Inisialisasi Scanner:</strong> <code>Scanner input = new Scanner(System.in);</code> – Membuat objek <code>Scanner</code> untuk membaca input dari konsol.</li>
                    <li><strong>Input Bilangan:</strong> <code>int awal = input.nextInt();</code> dan <code>int akhir = input.nextInt();</code> – Membaca dua bilangan dari pengguna untuk menentukan rentang pencarian bilangan prima.</li>
                    <li><strong>Loop for:</strong> <code>for (int i = awal; i <= akhir; i++)</code> – Mengulangi proses pengecekan untuk setiap bilangan dalam rentang dari <code>awal</code> hingga <code>akhir</code>.</li>
                    <li><strong>Pengecekan Bilangan Prima:</strong> <code>boolean isPrima = true;</code> – Menandai apakah bilangan saat ini adalah bilangan prima.</li>
                    <li><strong>Loop Nested:</strong> <code>for (int j = 2; j < i; j++)</code> – Memeriksa apakah bilangan <code>i</code> dapat dibagi habis oleh bilangan lain selain 1 dan dirinya sendiri.</li>
                    <li><strong>Kondisi Prima:</strong> <code>if (i % j == 0)</code> – Jika <code>i</code> dapat dibagi oleh <code>j</code>, maka <code>i</code> bukan bilangan prima.</li>
                    <li><strong>Output:</strong> <code>System.out.print(i + " ");</code> – Mencetak bilangan prima yang ditemukan.</li>
                </ul>

                <h2>2. Kalkulator</h2>
                <p>Program kalkulator ini melakukan operasi matematika dasar seperti penjumlahan, pengurangan, perkalian, dan pembagian. Berikut adalah kode program kalkulator sederhana:</p>

                <pre><code>import java.util.Scanner;

public class Kalkulator {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan angka pertama: ");
        double angkaPertama = input.nextDouble();

        System.out.println("Masukkan angka kedua: ");
        double angkaKedua = input.nextDouble();

        System.out.println("Hasil penjumlahan: " + (angkaPertama + angkaKedua));
        System.out.println("Hasil pengurangan: " + (angkaPertama - angkaKedua));
        System.out.println("Hasil perkalian: " + (angkaPertama * angkaKedua));
        System.out.println("Hasil pembagian: " + (angkaPertama / angkaKedua));
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Import Scanner:</strong> <code>import java.util.Scanner;</code> – Mengimpor kelas <code>Scanner</code> untuk membaca input dari pengguna.</li>
                    <li><strong>Kelas Kalkulator:</strong> <code>public class Kalkulator</code> – Mendefinisikan kelas <code>Kalkulator</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Inisialisasi Scanner:</strong> <code>Scanner input = new Scanner(System.in);</code> – Membuat objek <code>Scanner</code> untuk membaca input dari konsol.</li>
                    <li><strong>Input Angka:</strong> <code>double angkaPertama = input.nextDouble();</code> dan <code>double angkaKedua = input.nextDouble();</code> – Membaca dua angka dari pengguna.</li>
                    <li><strong>Operasi Matematika:</strong> Menghitung hasil penjumlahan, pengurangan, perkalian, dan pembagian dari dua angka.</li>
                    <li><strong>Output:</strong> Mencetak hasil dari masing-masing operasi matematika.</li>
                </ul>

                <h2>3. Penggunaan Scanner dan BufferedReader</h2>
                <p>Di Java, <strong>Scanner</strong> dan <strong>BufferedReader</strong> adalah dua cara berbeda untuk membaca input dari pengguna. Scanner lebih sederhana, sedangkan BufferedReader menawarkan kontrol lebih besar dan dapat membaca input lebih cepat.</p>

                <h3>Scanner</h3>
                <p>Berikut adalah contoh penggunaan <strong>Scanner</strong> untuk membaca input:</p>
                <pre><code>import java.util.Scanner;

public class ContohScanner {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama Anda: ");
        String nama = input.nextLine();

        System.out.println("Halo, " + nama + "!");
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Import Scanner:</strong> <code>import java.util.Scanner;</code> – Mengimpor kelas <code>Scanner</code> untuk membaca input dari pengguna.</li>
                    <li><strong>Kelas ContohScanner:</strong> <code>public class ContohScanner</code> – Mendefinisikan kelas <code>ContohScanner</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Inisialisasi Scanner:</strong> <code>Scanner input = new Scanner(System.in);</code> – Membuat objek <code>Scanner</code> untuk membaca input dari konsol.</li>
                    <li><strong>Input Nama:</strong> <code>String nama = input.nextLine();</code> – Membaca nama pengguna dari konsol.</li>
                    <li><strong>Output:</strong> <code>System.out.println("Halo, " + nama + "!");</code> – Mencetak pesan sapaan dengan nama yang dimasukkan.</li>
                </ul>

                <h3>BufferedReader</h3>
                <p>Berikut adalah contoh penggunaan <strong>BufferedReader</strong> untuk membaca input:</p>
                <pre><code>import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;

public class ContohBufferedReader {

    public static void main(String[] args) {
        try {
            BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));

            System.out.print("Masukkan nama Anda: ");
            String nama = reader.readLine();

            System.out.println("Halo, " + nama + "!");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Import BufferedReader:</strong> <code>import java.io.BufferedReader;</code> dan <code>import java.io.InputStreamReader;</code> – Mengimpor kelas <code>BufferedReader</code> dan <code>InputStreamReader</code> untuk membaca input dari pengguna.</li>
                    <li><strong>Kelas ContohBufferedReader:</strong> <code>public class ContohBufferedReader</code> – Mendefinisikan kelas <code>ContohBufferedReader</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Inisialisasi BufferedReader:</strong> <code>BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));</code> – Membuat objek <code>BufferedReader</code> untuk membaca input dari konsol.</li>
                    <li><strong>Input Nama:</strong> <code>String nama = reader.readLine();</code> – Membaca nama pengguna dari konsol.</li>
                    <li><strong>Output:</strong> <code>System.out.println("Halo, " + nama + "!");</code> – Mencetak pesan sapaan dengan nama yang dimasukkan.</li>
                    <li><strong>Penanganan Exception:</strong> <code>catch (IOException e) { e.printStackTrace(); }</code> – Menangani kemungkinan exception yang terjadi selama pembacaan input.</li>
                </ul>

                <h2>4. Percabangan</h2>
                <p>Percabangan dalam Java digunakan untuk membuat keputusan dalam program. Ada beberapa struktur percabangan yang umum digunakan, seperti <strong>if</strong>, <strong>if-else</strong>, dan <strong>switch</strong>.</p>

                <h3>Contoh If-Else</h3>
                <pre><code>public class ContohIfElse {

    public static void main(String[] args) {
        int angka = 10;

        if (angka > 0) {
            System.out.println("Angka positif");
        } else if (angka < 0) {
            System.out.println("Angka negatif");
        } else {
            System.out.println("Angka nol");
        }
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Kelas ContohIfElse:</strong> <code>public class ContohIfElse</code> – Mendefinisikan kelas <code>ContohIfElse</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Variabel Angka:</strong> <code>int angka = 10;</code> – Mendeklarasikan variabel <code>angka</code> dengan nilai 10.</li>
                    <li><strong>Percabangan if-else:</strong> <code>if (angka > 0)</code> – Mengecek jika <code>angka</code> lebih besar dari 0, jika ya, cetak "Angka positif".</li>
                    <li><strong>Else-If:</strong> <code>else if (angka < 0)</code> – Mengecek jika <code>angka</code> kurang dari 0, jika ya, cetak "Angka negatif".</li>
                    <li><strong>Else:</strong> <code>else</code> – Jika <code>angka</code> tidak lebih besar dari 0 dan tidak kurang dari 0, maka cetak "Angka nol".</li>
                </ul>

                <h3>Contoh Switch</h3>
                <pre><code>public class ContohSwitch {

    public static void main(String[] args) {
        int hari = 3;

        switch (hari) {
            case 1:
                System.out.println("Senin");
                break;
            case 2:
                System.out.println("Selasa");
                break;
            case 3:
                System.out.println("Rabu");
                break;
            default:
                System.out.println("Hari tidak valid");
        }
    }
}
</code></pre>

                <p><strong>Penjelasan:</strong></p>
                <ul>
                    <li><strong>Kelas ContohSwitch:</strong> <code>public class ContohSwitch</code> – Mendefinisikan kelas <code>ContohSwitch</code> sebagai kelas publik.</li>
                    <li><strong>Metode main:</strong> <code>public static void main(String[] args)</code> – Titik masuk utama untuk program, dieksekusi pertama kali.</li>
                    <li><strong>Variabel Hari:</strong> <code>int hari = 3;</code> – Mendeklarasikan variabel <code>hari</code> dengan nilai 3.</li>
                    <li><strong>Percabangan switch:</strong> <code>switch (hari)</code> – Memilih blok kode berdasarkan nilai dari variabel <code>hari</code>.</li>
                    <li><strong>Case:</strong> <code>case 1:</code>, <code>case 2:</code>, <code>case 3:</code> – Mengecek nilai <code>hari</code> dan mencetak nama hari yang sesuai.</li>
                    <li><strong>Default:</strong> <code>default:</code> – Menangani kasus jika nilai <code>hari</code> tidak cocok dengan salah satu nilai <code>case</code>.</li>
                </ul>

                <p>Jika memilih jurusan Computer Science, tentu harus belajar bahasa pemrograman Java dasar terlebih dahulu sebelum akhirnya belajar bahasa pemrograman yang lebih kompleks.</p>
            </section>
        </div>
    </main>
</body>
</html>

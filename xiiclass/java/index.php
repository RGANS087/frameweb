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

    <p>Jika memilih jurusan Computer Science, tentu harus belajar bahasa pemrograman Java dasar terlebih dahulu sebelum akhirnya belajar bahasa pemrograman yang lebih kompleks.</p>
            </td>
        </tr>
    </table>
</body>
</html>

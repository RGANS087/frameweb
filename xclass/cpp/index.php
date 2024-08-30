<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../../login/index.php");
    exit(); // Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Kelas 10 SMK - C++</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>C++ Programming Dasar</h1>
            <p>Materi Kelas 10 SMK</p>
        </div>
    </header>

    <main class="container">
        <section>
            <h2>Sejarah Bahasa Pemrograman C++</h2>
            <p>Delapan tahun setelah bahasa pemrograman C dikembangkan di Bell Lab pada tahun 1972, muncul bahasa C++ yang dirancang oleh Bjarne Stroustrup di AT&T Bell Laboratories pada tahun 1980.

                Stroustrup yang saat itu mengejar gelar Ph.D berkesempatan bekerja dengan bahasa Simula. Simula disebut sebagai bahasa pertama yang mendukung paradigma pemrograman berorientasi obyek.
                
                Kemudian, muncul keinginan pada diri Stroustrup untuk menciptakan bahasa pemrograman dengan tambahan fitur berorientasi objek. Ia menyadari paradigma pemrograman berorientasi obyek akan berguna untuk pengembangan perangkat lunak. Sementara menurutnya, bahasa Simula masih terlalu lambat untuk penggunaan praktis.
                
                Prototype C++ kali pertama muncul sebagai C yang dipercanggih dengan fasilitas kelas, atau dikenal sebagai C with Classes. C with Classes kemudian disempurnakan kembali dengan menambah fasilitas overloading operator, dan kemudian disebut sebagai a better C, yang kemudian berganti nama lagi menjadi C++ di tahun 1983.
                
                Simbol ++ yang ditambahkan pada penamaan tersebut adalah operator penaikan C yang digunakan untuk memperlihatkan bahwa bahasa ini adalah versi paling canggih dan paling baru dari C.</p>
        </section>

        <section>
            <h2>Apa itu Bahasa Perograman C++?</h2>
            <p>
                C++ adalah bahasa yang bisa digunakan untuk membuat berbagai aplikasi. Misalnya, aplikasi pengolah
                gambar, software gadget, game, hingga sistem operasi baru.
                Bahasa ini dikembangkan dari bahasa pemrograman C. Tak heran kalau dua bahasa ini memiliki sintaks dan
                struktur kode yang sama. Bedanya, C++ merupakan Object Oriented Programming (OOP) sedangkan C merupakan
                bahasa pemrograman prosedural.
                Artinya, bahasa pemrograman C++ memiliki data dan function yang disatukan dalam kelas dan objek untuk
                bekerjasama memecahkan sebuah masalah. Jadi ketika Anda ingin mengubah fungsi, tidak perlu mengubah
                keseluruhan program. Dengan begitu, pengubahan kode akan lebih fleksibel.
                Hal ini tidak bisa dilakukan dalam bahasa pemrograman C yang bersifat prosedural, di mana data dan
                function terpisah dan harus dibaca satu persatu oleh compiler. Sehingga ketika Anda ingin mengubah
                fungsi, Anda perlu mengubah keseluruhan program.
                Sejak awal dirancang pada tahun 1983, bahasa pemrograman C++ terus berkembang hingga di versi terbaru
                C++17 yang dirilis pada tahun 2017. Meskipun ada beberapa versi, konsep dasarnya sama sehingga Anda tak
                perlu bingung manakah yang akan digunakan.
            </p>
        </section>

        <section>
            <h2>Kelebihan Bahasa C++</h2>
            <ul>
                <li>Berorientasi pada objek</li>
                <P>Konsep OOP (Object-Oriented Programming) seperti polimorfisme, enkapsulasi, pewarisan, dan abstraksi memberi C++ keuntungan terbesar dibandingkan bahasa pemrograman lainnya. Ini terbukti sangat penting karena fitur ini tidak ada di bahasa asli C,
                     yang dapat membantu pengguna untuk memperlakukan data sebagai objek dan kelas.</P>

                     <li>Cepat, kuat dan bisa diandalkan</li>
                     <p>Karena C++ adalah bahasa pemrograman berbasis compiler, programmer tidak perlu menginstal runtime khusus saat menjalankan program. Oleh karena itu, bahasa C++ ini dapat diinterpretasikan sebelumnya yang akhirnya membuat kode lebih cepat dan lebih kuat. Bahkan kompilasi dan eksekusinya lebih cepat sehingga memungkinkan untuk membuat 
                        beberapa jenis program mulai dari game hingga driver sampai GUI yang terkenal rumit</p>

                        <li>Portabilitas yang baik</li>
                        <p>C++ menyediakan fitur portabilitas yang memungkinkan programmer untuk mengembangkan kode tanpa mempedulikan perangkat keras. Karena kepraktisannya ini memungkinkan pengembang dalam memindahkan pengembangan program dari satu platform ke platform lainnya. Programmer yang bekerja di Windows juga bisa membuka kode dan bekerja di Linux, 
                            ini adalah contoh yang membuat C++ semakin populer.</p>
            </ul>

            <h2>Kekurangan Bahasa C++</h2>
            <ul>
                <li>Tidak Aman</li>
                <p>Adanya pointer, variabel global, dan lain- lain adalah alasan utama dibalik masalah keamanan ini. Faktor- faktor ini berarti mungkin untuk merusak seluruh program hanya dengan menggunakan bagian 
                    dari memori sebagai jenis yang salah yang membuat C++ bisa menjadi tidak aman.</p>

                    <li>Kurang fleksibel</li>
                    <p>C++ sangat ketat mengenai sintaks, sedikit saja celah terbuka akan memberikan serangkaian kesalahan. Disamping itu tidak mudah juga untuk menulis kode C++ dengan cara yang mudah dibaca, membuat bahasanya kurang ramah pengguna dan kurang fleksibel bagi pengguna sehingga 
                        akan membutuhkan waktu untuk menguasai C++ jika dibandingkan dengan bahasa lain.</p>

                        <li>Sangat Kompleks</li>
                        <p>Pemrograman C++ adalah bahasa multiparadigma, yaitu pemrograman berorientasi objek dengan polimorfisme runtime, template, dan polimorfisme statis, beberapa dukungan untuk pemrograman fungsional. C++ tidak berguna untuk aplikasi yang bergantung pada platform dan karenanya rumit dalam program tingkat tinggi 
                            yang sangat besar membuatnya menjadi kompleks untuk dipelajari dalam waktu singkat.</p>
            </ul>
        </section>

        <section>
            <h2>Konsep Dasar Bahasa Pemrograman C++</h2>
            <p>
                Kalau Anda ingin belajar C++, penting untuk memahami konsep dasar bahasa pemrograman C++ berikut ini:
            </p>

            <h2>Variabel</h2>
            <p>
                Variabel adalah penanda identitas yang digunakan untuk menampung suatu nilai. Artinya,
                variabel akan menunjukkan suatu lokasi yang ada di memori komputer atau RAM. Jadi, saat Anda membuat
                satu variabel, akan ada satu slot memori untuk menampung nilai tersebut.
            </p>
            <p>
                Berikut ini adalah tipe-tipe data yang ada di dalam variabel C++:
            </p>

            <ul>
                <li>bool: tipe data berupa nilai boolean, yaitu True or False</li>
                <li>char: tipe data huruf dari A sampai Z</li>
                <li>int: tipe data berupa angka</li>
                <li>float dan double: tipe data berupa angka pecahan, contohnya 1,33 </li>
                <li>string: tipe data berupa kumpulan karakter seperti “belajar bahasa c++”</li>
            </ul>

            <h2>Deklarasi</h2>
            <p>Deklarasi dilakukan sebelum program dimulai. Namun, Anda juga bisa melakukan deklarasi di tengah program.
                Akan tetapi,
                deklarasi harus sudah selesai sebelum Anda menggunakan program. Berikut ini adalah contoh deklarasi:</p>

            <pre><code>
            int i;      // contoh deklarasi
            char c; 
            int i, j, k;  // banyak deklarasi
            </code></pre>

            <p>Sedangkan inisialisasi artinya mengisi nilai di dalam variabel yang sudah dideklarasikan. Contohnya
                seperti ini:</p>

            <pre><code>
            int i;   // deklarasi
            i = 10;  // inisialisasi
            </code></pre>

            <h2>Variabel global</h2>
            <p>Variabel global adalah variabel yang ketika Anda deklarasikan, bisa digunakan lagi dalam class dan
                function apapun selama program masih berjalan.
                Variabel ini dideklarasikan di luar function main(). Contohnya seperti ini:</p>
            <pre><code>
                #include <iostream>
                    using namespace std;
                    int x;                // Deklarasi variabel global 
                    int main()
                    {
                        x=10;                 // inisialisasi pertama
                        cout <<"first value of x = "<< x;
                        x=20;                 // inisialisasi kedua
                        cout <<"diinisialisasi lagi dengan value = "<< x;
                    }
            </code></pre>

            <h2>variabel lokal </h2>
            <p>Sedangkan variabel lokal adalah variabel yang hanya bisa berfungsi jika dideklarasikan di dalam function
                main().
                Artinya, jika dideklarasikan di luar main () maka Anda akan menemui error.</p>

            <pre><code>
                    #include <iostream>
                        using namespace std;
                        int main()
                        {
                            int i=10;
                            if(i<20)        // batas awal cakupan
                            {
                                int n=100;   // variabel lokal dideklarasikan dan diinisialisasi
                            }              // batas akhir cakupan
                            cout << n;      // Compile time error
                        }
                    </pre></code>
        </section>

        <section>
            <h2>Statement if</h2>
            <p>Statement if digunakan untuk mencari kebenaran dari conditional expression yang berupa
                nilai boolean dengan nilai True atau False. Begini contohnya:</p>
            <pre><code>
    #include< iostream.h>
int main( )
{
    int x,y;
    x=37;
    y=25;
    if (x > y )
    {
        cout << "x lebih besar daripada y";
    }
}
                </code></pre>

            <h2>Statement else if</h2>
            <p>Ketika compiler menemukan penyeleksian dengan statement if, CPU akan memeriksa kebenaran dari conditional
                expression. Jika hasilnya True, maka perintah kode akan dijalankan. Namun, jika hasilnya False,
                maka compiler akan memeriksa kode dengan statemen else if. </p>
            <pre><code>
void main( )
{
    int x,y;
    x=15;
    y=19;
    if (x > y )
    {
        cout << "x lebih besar daripada y";
    }
    else
    {
        cout << "y lebih besar daripada x";
    }
}
                    </code></pre>
            <p>Pemeriksaan akan dilakukan secara berulang di setiap baris kode hingga menemukan nilai True. Jika tidak
                ada nilai True, maka compiler akan melakukan perintah statemen else. Namun, apabila statemen else juga
                tidak
                memiliki nilai True, maka pernyataan if akan diabaikan seluruhnya.</p>
        </section>

        <section>
            <h2>structure untuk pengulangan atau loops</h2>
            <p>Selain memiliki control structure untuk penyeleksian, bahasa C++ juga 
                memiliki control structure untuk pengulangan atau loops, yaitu:</p>

                <h2>While</h2>
                <p>While adalah statemen yang digunakan untuk mengulangi sejumlah perintah selama 
                    conditional expression bernilai True. Di bawah ini adalah contohnya:</p>
                    <pre><code>
                        int x=0 ;
while (x<=10)
{
    statements;
    x++ or x-- or x=x+2; 
}
                    </code></pre>

                    <h2>Do While</h2>
                    <p>Do while adalah statemen untuk mengeksekusi sebuah perintah, baru kemudian memeriksa conditional expression berupa bilangan boolean. Statemen do akan 
                        mengeksekusi perintah, kemudian while akan memeriksa conditional expression.</p>
                        <p>Contoh statemen do while:</p>
                        <pre><code>do{
                            pernyataan;
                            …
                           }while(conditional expression);</code></pre>
                           <p>Jadi pada saat compiler bertemu dengan statemen do while, compiler akan langsung mengeksekusi perintah yang ada di dalam badan do while. Untuk pengulangan perintah, compiler akan memeriksa conditional expression terlebih dahulu. 

                            Jika conditional expression bernilai 1 atau true, maka compiler akan kembali mengeksekusi perintah. Pengulangan akan terus berlanjut hingga conditional expression bernilai 0 atau false.</p>
       
                         <h2>For</h2>
                         <p>For adalah statemen untuk mengeksekusi banyak perintah secara berulang-ulang. Artinya, statemen ini 
                            berguna untuk membuat program yang dinamis. Berikut adalah contoh penggunaannya:</p>   
                            <pre><code>
                                for(initialization; condition; increment/decrement)
{
    statement-block;
}
                            </code></pre>
                        </section>



    </main>

</body>

</html>
<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../../login/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Kelas 10 SMK - C++</title>
    <link rel="stylesheet" href="vb.css">
</head>

<body>

    <header>
        <div>
            <h1>Visual Basic Dasar</h1>
            <p>Materi Kelas 10 SMK</p>
        </div>
    </header>

    <main class="container">

        <section>
            <h2>Sejarah Visual Basic</h2>
            <p>Bill Gates, pendiri Microsoft, memulai bisnis perangkat lunak dengan mengembangkan interpreter bahasa
                Basic untuk Altair 8800, untuk kemudian ia ubah agar dapat berjalan di atas IBM PC dengan sistem operasi
                DOS. Perkembangan berikutnya ialah diluncurkannya BASICA (basic-advanced) untuk DOS. Setelah BASICA,
                Microsoft meluncurkan Microsoft
                QuickBasic dan Microsoft Basic (dikenal juga sebagai Basic Compiler).</p>

            <p>Visual Basic adalah pengembangan dari bahasa komputer BASIC (Beginners All-purpose Symbolic Instruction
                Code). Bahasa BASIC diciptakan oleh Professor John Kemeny dan Thomas Eugene Kurtz dari Perguruan Tinggi
                Dartmouth pada pertengahan tahun 1960-an.[3] Bahasa program tersebut tersusun mirip dengan bahasa
                Inggris yang biasa digunakan oleh para programer untuk menulis program-program komputer
                sederhana yang berfungsi sebagai pembelajaran bagi konsep dasar pemrograman komputer.</p>

            <p>Sejak saat itu, banyak versi BASIC yang dikembangkan untuk digunakan pada berbagai platform komputer,
                seperti Microsoft QBASIC, QUICKBASIC, GWBASIC, IBM BASICA, Apple BASIC dan lain-lain.</p>

            <p>Apple BASIC dikembangkan oleh Steve Wozniak, mantan karyawan Hewlett Packard dan teman dekat Steve Jobs
                (pendiri Apple Inc.). Steve Jobs pernah bekerja dengan Wozniak sebelumnya (mereka membuat game arcade
                “Breakout” untuk Atari). Mereka mengumpulkan uang dan bersama-sama merakit PC, dan pada tanggal 1 April
                1976 mereka secara resmi
                mendirikan perusahaan komputer Apple. Popularitas dan pemakaian BASIC yang luas dengan berbagai jenis
                komputer turut berperan dalam mengembangkan dan memperbaiki bahasa itu sendiri, dan akhirnya berujung
                pada lahirnya Visual Basic yang berbasis GUI (Graphic User Interface) bersamaan dengan Microsoft
                Windows. Pemrograman Visual Basic begitu mudah bagi pemula dan programer musiman karena ia menghemat
                waktu pemrograman
                dengan tersedianya komponen-komponen siap pakai.</p>

            <p>Hingga akhirnya Visual Basic juga telah berkembang menjadi beberapa versi, sampai yang terbaru, yaitu
                Visual Basic 2010. Bagaimanapun juga Visual Basic 6.0 tetap menjadi versi yang paling populer karena
                mudah dalam membuat programnya dan ia tidak menghabiskan banyak memori.</p>

            <p>Sejarah BASIC di tangan Microsoft sebagai bahasa yang diinterpretasi (BASICA) dan juga bahasa yang
                dikompilasi (BASCOM) membuat Visual Basic diimplementasikan sebagai gabungan keduanya.[4] Programmer
                yang menggunakan Visual Basic bisa memilih kode bahasa pemrograman yang dikompilasi atau kode yang harus
                bahasa pemrograman yang diinterpretasikan sebagai hasil porting dari kode VB.[4] Sayangnya, meskipun
                sudah terkompilasi jadi bahasa mesin, DLL bernama MSVBVMxx.DLL tetap dibutuhkan. Namun karakteristik
                bahasa terkompilasi
                tetap muncul (ia lebih cepat dari kalau kita pakai mode terinterpretasi)</p>
        </section>

        <section>
            <h2>Pengertian Visual Basic</h2>
            <p>Visual Basic adalah bahasa pemrograman yang dikembangkan oleh Microsoft, dirancang untuk memudahkan
                proses pembuatan software dengan graphic user interface (GUI).

                Dengan menggunakan Visual Basic, developer dapat merancang aplikasi secara visual dan interaktif melalui
                teknik drag-and-drop objek, serta mendefinisikan perilaku dan tampilannya dengan mudah.

                Bahasa ini berasal dari BASIC, sebuah bahasa pemrograman yang menekankan kemudahan penggunaan dan
                kecepatan dalam pengembangan aplikasi, menjadikannya ideal untuk prototipe awal sebelum dikembangkan
                lebih lanjut dengan bahasa yang lebih kompleks.

                Visual Basic juga berfungsi dalam pembuatan file eksekutabel (exe file) dan bisa dipakai sebagai front
                interface untuk database. Versi populer dari Visual Basic yang banyak digunakan saat ini adalah Visual
                Basic for Applications (VBA), yang memungkinkan otomasi tugas-tugas rutin dalam aplikasi Microsoft
                Office seperti Excel dan PowerPoint.</p>
        </section>

        <section>
            <h2>Fitur-fitur Visual Basic</h2>
            <ul>
                <li>GUI yang intuitif: Visual Basic menyediakan lingkungan pengembangan visual yang membantu developer
                    merancang UI aplikasi secara intuitif. Dengan teknik drag-and-drop, developer dapat dengan mudah
                    menempatkan kontrol seperti
                    tombol, kotak teks, dan label pada form, tanpa perlu menulis banyak kode.</li>
                <li>Object-oriented programming (OOP): meskipun versi awal Visual Basic didasarkan pada pemrograman
                    prosedural, Visual Basic .NET sepenuhnya mendukung konsep pemrograman berorientasi objek, termasuk
                    class, inheritance, polimorfisme, dan enkapsulasi. Ini memungkinkan pengembangan
                    aplikasi yang lebih terstruktur dan mudah untuk di-maintain.</li>
                <li>Komponen dan kontrol yang dapat digunakan kembali: Visual Basic berfungsi untuk menggunakan dan
                    membuat komponen serta kontrol yang dapat digunakan kembali, meningkatkan produktivitas dan
                    mempercepat proses pengembangan. Misalnya, komponen ActiveX dapat diintegrasikan
                    ke dalam aplikasi Visual Basic untuk menambahkan fungsionalitas khusus</li>
                <li>VB runtime dan .NET Framework: aplikasi yang dikembangkan dengan Visual Basic memerlukan VB runtime
                    atau .NET Framework untuk dijalankan. Ini memastikan
                    aplikasi bisa berjalan dengan stabil dan efisien di lingkungan Windows</li>
            </ul>
        </section>

        <section>
            <h2>Kelebihan Visual Basic</h2>
            <ul>
                <li>Rapid Application Development (RAD): Visual Basic dirancang untuk Rapid Application Development
                    (RAD), memungkinkan developer membuat prototipe dan aplikasi secara cepat. Ini sangat berguna untuk
                    proyek
                    dengan tenggat waktu terbatas</li>
                <li>Integrasi dengan aplikasi Office: Visual Basic for Applications (VBA) berguna agar developer bisa
                    mengotomatiskan dan memperluas fungsionalitas aplikasi Microsoft Office, seperti Excel, Word, dan
                    PowerPoint,
                    dengan menulis skrip.</li>
                <li>Akses database yang mudah: Visual Basic menyederhanakan proses menghubungkan aplikasi dengan
                    database, baik itu SQL Server, Oracle, atau database lainnya, melalui ActiveX Data Objects (ADO)
                    atau LINQ (Language Integrated Query)
                    di Visual Basic .NET.</li>
                <li>Kompatibilitas dengan .NET Framework: Visual Basic .NET sepenuhnya terintegrasi dengan .NET
                    Framework, memberikan akses ke class library yang luas, dukungan untuk pengembangan web app dengan
                    ASP.NET, dan kemampuan untuk
                    mengembangkan aplikasi cross-platform.</li>
                <li>Keamanan dan manajemen memori: Visual Basic .NET mengelola memori secara otomatis, mengurangi risiko
                    kebocoran memori dan kesalahan lain yang terkait
                    dengan manajemen memori manual.</li>
                <li>Alat debugging yang kuat: lingkungan pengembangan Visual Basic menyediakan alat debugging yang kuat,
                    memudahkan developer untuk mengidentifikasi dan memperbaiki
                    bug dalam kode mereka</li>
            </ul>

            <h2>Kekurangan Visual Basic</h2>
            <ul>
                <li>Keterbatasan platform: versi klasik Visual Basic terbatas pada pengembangan aplikasi untuk platform
                    Windows. Meskipun Visual Basic .NET (bagian dari .NET Framework) menawarkan kemampuan cross-platform
                    yang lebih baik, aplikasi yang dikembangkan dengan Visual Basic secara tradisional kurang portabel
                    ke
                    sistem operasi lain seperti Linux atau macOS.</li>
                <li>Performa: aplikasi yang dikembangkan dengan Visual Basic mungkin tidak seefisien aplikasi yang
                    ditulis dalam bahasa pemrograman yang lebih rendah tingkatannya, seperti C atau C++. Ini terutama
                    berlaku untuk aplikasi yang memerlukan penggunaan intensif sumber daya sistem atau
                    yang membutuhkan kecepatan eksekusi tinggi.</li>
                <li>Transisi ke .NET: transisi dari Visual Basic versi klasik ke Visual Basic .NET menimbulkan
                    tantangan bagi beberapa developer karena perbedaan signifikan dalam sintaks dan paradigma
                    pemrograman. Meskipun Visual Basic .NET menawarkan banyak peningkatan dan fitur baru, proses migrasi
                    bisa menjadi rumit dan memakan waktu.
                </li>
                <li>Ketergantungan pada Microsoft: sebagai produk Microsoft, pengembangan dan masa depan
                    Visual Basic sangat bergantung pada strategi dan dukungan Microsoft. Ini bisa menjadi pertimbangan
                    bagi perusahaan yang mencari solusi dengan ketergantungan vendor lebih rendah.</li>
                <li>Biaya lisensi: untuk menggunakan Visual Studio (IDE utama untuk pengembangan Visual Basic)
                    kemungkinan diperlukan biaya lisensi, terutama untuk versi enterprise yang menawarkan fitur-fitur
                    lanjutan. Ini bisa menjadi pertimbangan bagi individu atau
                    perusahaan dengan anggaran terbatas</li>
                <li>Kurangnya fitur untuk pengembangan web app modern: meskipun ASP.NET membantu developer web app
                    dengan Visual Basic, developer kemungkinan menemukan bahwa bahasa dan framework lain (seperti
                    JavaScript dengan Node.js atau Python dengan Django) menawarkan ekosistem yang lebih kaya dan lebih
                    sesuai untuk web modern pengembangan aplikasi./li>
            </ul>
        </section>

        <section>
            <h2>Code Untuk Menampilkan Hello World</h2>
            <pre><code>
                Private Sub Form_Load()
    ' Execute a simple message box that says "Hello, World!"
    MsgBox "Hello, World!"
End Sub
            </code></pre>

            <h3>Private Sub Form_Load():</h3>
            <ul>
                <li>Private adalah kata kunci yang menunjukkan bahwa prosedur ini hanya dapat diakses dari dalam modul
                    yang
                    sama.</li>
                <li>Sub adalah singkatan dari "Subroutine," yaitu blok kode yang melakukan serangkaian tugas tetapi
                    tidak
                    mengembalikan nilai</li>
                <li>Form_Load adalah nama dari subroutine khusus yang dijalankan secara otomatis ketika sebuah formulir
                    (form) dimuat atau dibuka. Dalam konteks aplikasi Windows yang dibuat dengan Visual Basic, setiap
                    kali
                    formulir dibuka, kode di
                    dalam subroutine Form_Load akan dieksekusi.</li>
            </ul>


            <h3>MsgBox "Hello, World!":</h3>
            <ul>
                <li>MsgBox adalah fungsi built-in di VBA/Visual Basic yang digunakan untuk menampilkan kotak pesan
                    (message
                    box) kepada pengguna. Kotak pesan ini dapat menampilkan informasi, peringatan, atau pertanyaan, dan
                    dapat berisi tombol untuk mendapatkan
                    masukan dari pengguna.</li>
                <li>"Hello, World!" adalah teks yang akan ditampilkan di kotak pesan. Dalam hal ini, teks ini adalah
                    pesan
                    sederhana "Hello, World!" yang akan muncul
                    ketika formulir dimuat.</li>
            </ul>

            <h3> End Sub:</h3>
            <ul>
                <li>End Sub digunakan untuk menandai akhir dari sebuah subroutine. Ini memberi tahu interpreter bahwa
                    tidak
                    ada lagi instruksi yang akan
                    dieksekusi dalam blok kode ini.</li>
            </ul>
        </section>

        <section>
            <h2>Tampilan Visual Basic 6.0</h2>
            <img src="form vb.png" alt="Deskripsi gambar" width="400" height="400" class="img">

            <h3>Menu Bar</h3>
            <p>Menu Bar merupakan kumpulan menu perintah yang dikelompokkan berdasarkan kriteria pengoprasiannya. Menu
                Bar ini juga telah dikelompokkan berdasarkan fungsi dan kegunaannya masing-masing sebagai berikut :</p>
            <ul>
                <li> File Menu ini berfungsi untuk mengatur suatu file, seperti New Project, Open Project, Save Project,
                    Print
                    dan lain-lain</li>
                <li> Edit Menu ini berfungsi untuk memproses pengeditan objek, komponen dan kode di Code Editor. Contoh
                    : Cut,
                    Copy, Paste, Select All dll.</li>
                <li> View Menu ini berfungsi untuk mengaktifkan bagian-bagian dari Integrated Development Environment.
                    Project Menu ini berfungsi untuk manajemen proyek beserta pendukungnya.</li>
                <li> Format Menu ini berfungsi untuk melakukan proses format tampilan di form.
                    Debug Menu ini berfungsi untuk melacak kesalahan program saat dijalankan.</li>
                <li> Run Menu ini berfungsi untuk menangani proses kompilasi program, seperti Run, Build, Step Over,
                    Debug dan
                    lain-lain.</li>
                <li> Query Menu ini berfungsi untuk mengakses data yang diperlukan pada aplikasi database.</li>
                <li> Diagram Menu ini berfungsi untuk pengaturan diagram terutama pada proses perancangan.</li>
                <li> Tools Menu ini berfungsi untuk menyediakan perlengkapan tambahan yang diperlukan dalam penyusunan
                    program</li>
                <li> Add-Ins Menu ini berfungsi untuk melakukan pengaturan program tambahan pada Visual Basic 6.0</li>
                <li>Window Menu ini berfungsi untuk melakukan pengaturan window yang sedang aktif (terbuka)</li>
                <li>Help Menu ini berfungsi untuk memberikan informasi bagi pemakai Visual Basic 6.0</li>
            </ul>

            <h3>Tollbar</h3>
            <p>Toolbar merupakan sekumpulan tombol yang mewakili suatu perintah tertentu pada Visual Basic. Kehadiran
                tombol-tombol speed pada toolbar akan sangat membantu dalam mempercepat akses perintah. Biasanya
                tombol-tombol ini merupakan perintah-perintah yang sering digunakan dan terdapat pula pada menu Visual
                Basic, seperti pada menu Edit, Copy. Toolbar ini
                juga telah dikelompokkan berdasarkan fungsi dan keterangannya masing-masing sbb :</p>
            <img src="tollbar.png" alt="Deskripsi gambar" width="600" height="600" class="img">

            <h3>Tollbox</h3>
            <p>Toolbox merupakan sebuah jendela di mana obyek atau kontrol ditempatkan, yang nantinya dibutuhkan untuk
                membentuk suatu program yang dilakukan dengan cara memasangnya pada sebuah Form. Adapun penjelasan dan
                fungsi dari
                masing-masing kontrol yang terdapat pada Toolbox sbb :</p>
            <img src="tollbox.png" alt="Deskripsi gambar" width="400" height="400" class="img">
            <img src="tollbox pj.png" alt="Deskripsi gambar" width="600" height="600" class="img">

            <h3>Form Window</h3>
            <p>Form Window (Jendela Form) merupakan area kerja di mana sobat nantinya 
                akan merancang suatu program aplikasi Visual Basic. Dan pada jendela form ini juga sobat 
                bisa meletakkan kontrol (obyek) seperti : Command Button, TextBox, Label, CheckBox, dan lain-lain. Sedangkan untuk ukuran dari jendela form pada mulanya berukuran kecil namun sobat dapat mengubah ukurannya 
                sesuai dengan kebutuhan. Contohnya formnya sbb</p>
                <img src="form window.png" alt="Deskripsi gambar" width="400" height="400" class="img">

                <h3> Project Explorer</h3>
                <p>Project Explorer merupakan area yang berisi semua file program aplikasi Visual Basic. Suatu aplikasi  dalam Visual Basic biasanya disebut dengan Project (Proyek), dan setiap proyek dapat terdiri dari 
                    satu atau lebih file misalnya : Form, Modul, Class dan lain sebagainya.</p>
                    <img src="xp.png" alt="Deskripsi gambar" width="400" height="400" class="img">

                    <h3>Window Properties</h3>
                    <p>Pada Window ini berisi semua informasi mengenai kontrol (obyek) yang dibuat, dan bertugas menyiapkan segala properti dari kontrol yang nantinya diperlukan ketika melakukan perancangan User Interface maupun pemrograman. Pada bagian paling atas dari jendela properties terdapat kotak yang menunjukkan nama obyek yang sedang aktif. Dimana nama dari obyek akan tampil pada kotak tersebut 
                        ketika kita melakukan klik langsung pada obyek yang terpasang pada form.</p>
                        <img src="wp.png" alt="Deskripsi gambar" width="400" height="400" class="img">

                        <h3>Form Layout Window</h3>
                        <p>Form Layout Window merupakan jendela yang menunjukkan tata letak dari form saat ditampilkan pada layar monitor. Dengan kata lain atas bantuan fitur ini, sobat akan tahu 
                            persis dimana posisi aplikasi saat dijalankan pada layar monitor.</p>

                            <h3>Code Window</h3>
                            <p>Code Window merupakan area dimana sobat dapat menuliskan kode-kode program Visual Basic. Suatu kode-kode program merupakan kumpulan dari instruksi untuk menjalankan obyek yang berupa kontrol maupun form serta logika program. Untuk menampilkan jendela ini sobat cukup melakukan double klik pada kontrol maupun form, yang dimana kursor 
                                nantinya kita gunakan untuk menuliskan kode-kode program berada diantara perintah sbb :</p>
                                <img src="cw.png" alt="Deskripsi gambar" width="400" height="400" class="img">

                                <h3>Komponen program</h3>
                                <p>Dalam membuat suatu proyek (Project) tentu tidak lepas dari pemakaian komponen-komponen program. Selain berbentu tampilan pada form, beberapa komponen program biasanya bisa terdiri dari kode-kode program. Komponen program yang ditempatkan pada form biasanya berbentuk file (.Frm), sedang komponen program yang berisi kode-kode program bisa terdiri dari file (.Bass, .Cls, dan lain-lain) baik yang dibuat lewat Module, Class Module, 
                                    User Control, Property Page dan lain sebagainya. Contoh sbb :</p>
                                    <img src="kp.png" alt="Deskripsi gambar" width="400" height="400" class="img">  






        </section>

    </main>

</body>

</html>
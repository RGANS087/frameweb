<?php
$server = "sql201.infinityfree.com";
$user = "if0_37201059";
$pass = "1TPcnA14xZF";
$database = "if0_37201059_buwid";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>

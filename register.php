<?php
//koneksi ke database
include 'anggota.php';
//menangkap data yang dikirim dari form pendaftaran
$nim = $_POST['nim'];
$nama_lngkp = $_POST['nama_lngkp'];
$username = $_POST['username'];
$pass = $_POST['pass'];

//mengimput data ke database
mysqli_query($anggota,"INSERT INTO anggota (nim, nama_lngkp, username, pass) VALUES ('$nim', '$nama_lngkp', '$username', '$pass')");

//mengalihkan halaman kembali ke halaman utama
header("location:http://localhost/perpustakaan/halamanutama.html");
?>
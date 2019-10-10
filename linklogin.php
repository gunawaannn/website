<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'anggota.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['pass'];

// menyeleksi data admin dengan username dan password yang sesuai
$login =mysqli_query($anggota,"SELECT * FROM anggota WHERE username='$username' and pass='$pass'");

$cek = mysqli_num_rows($data);
$hasil = mysqli_fetch_array($login);

if($hasil ['username']==$username and $hasil['pass']==$pass){
    echo"<script> location.href='halamansetelahlogin.php';</script>";

}else {
    echo"<script> alert('username dan password anda salah'); location.href='login.php';</script>";
}

?>
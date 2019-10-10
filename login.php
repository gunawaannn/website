<html>
<head>
<title>Login Anggota</title>
<link rel="stylesheet" href="Login.css">
</head>
<body>
<form method="post" action="linklogin.php">

<div class="tampilan">
 <div class="kepala">
<div class="logo"></div>
<h2 class="judul">Login Anggota</h2>
</div>

<div class="artikel">
<div class="kesalahan">
<?php
        if(isset($_GET["login_error"])){
            echo "Username atau password salah";
        }
    ?>
</div>

<div class="kotak">
<p><input type="text" name="username" value="" placeholder="Masukan Username Anda"></p>
<p><input type="password" name="pass" value="" placeholder="Masukan Password Anda"></p>
<p class="submit"><input type="submit" name="commit" value="Login"></p>

</form>
</div>
</div>

<div class="kotak">
<h3 align="center"> Belum Memiliki Akun? </h3>
<a href="http://localhost/perpustakaan/form pendaftaran.php">Daftar Sekarang</a>

 </div>
</div>
</body>
</html> 
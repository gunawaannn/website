<?php
$anggota = mysqli_connect("localhost", "root", "", "anggota_perpus");

if (mysqli_connect_error()) {
	echo "Koneksi Gagal : ". mysqli_connect_error();
}
?>
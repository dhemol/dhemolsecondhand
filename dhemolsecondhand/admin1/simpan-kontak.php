<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$deskripsi = $_POST['desc'];

//simpan data ke database
$query = mysqli_query($con,"UPDATE pagekontak SET deskripsi='$deskripsi'") or die(mysqli_error());
 
if ($query) {
    header('location:kontak.php');
}
?>
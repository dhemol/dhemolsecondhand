<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

//simpan data ke database
$query = mysqli_query($con, "INSERT INTO pengelola VALUES('', '$username', '$password')") or die(mysqli_error());
 
if ($query) {
    header('location:user.php?message=success');
}
?>
<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$id = $_POST['id'];
$password = $_POST['password'];

//simpan data ke database
$query = mysqli_query($con,"update pengelola set password='$password' where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:user.php?message=update');
}
?>
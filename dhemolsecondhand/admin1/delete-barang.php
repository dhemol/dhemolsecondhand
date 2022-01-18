<?php
include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"delete from barang where id_brg='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:barang.php?message=delete');
}
?>
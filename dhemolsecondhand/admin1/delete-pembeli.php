<?php
include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"DELETE FROM pembeli WHERE id_pembeli='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:pembeli.php?message=delete');
}
?>
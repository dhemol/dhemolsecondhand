<?php
session_start();
include('inc/koneksi.php');

//menerima nilai dari kiriman form pendaftaran
if(isset($_POST['submit'])) {
$username=$_POST['username'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$password=$_POST['password']; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="INSERT into pembeli (username,nama,alamat,email,telp, password) values
		('$username','$nama','$alamat','$email','$no_hp','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($con,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    $_SESSION['username'] = $username;
    // header('location:index.php');
	 echo "<script>location='index.php';</script>";
    exit();
  }
else {
	echo "Gagal simpan data";
	exit;
}  
}
?>
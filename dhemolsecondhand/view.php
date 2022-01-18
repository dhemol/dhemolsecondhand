<?php
session_start();
include('inc/koneksi.php');
    // Cek apakah variabel $keyword tersedia
    // Artinya cek apakah user telah mengklik tombol search atau belum
    // variabel $keyword ini berasal dari file search.php,
    // dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
    if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
      $param = '%'.$keyword.'%';
      
      // Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
      $sql = $pdo->prepare($con, "SELECT * FROM barang WHERE id_brg LIKE :id_brg OR nama_brg LIKE :nama_brg OR harga_brg LIKE :harga_brg 
      OR desc_brg LIKE :desc_brg OR jml_brg LIKE :jml_brg OR kategori LIKE :kategori OR gambar_brg LIKE :gambar_brg");
      $sql->bindParam(':id_brg', $param);
      $sql->bindParam(':nama_brg', $param);
      $sql->bindParam(':harga_brg', $param);
      $sql->bindParam(':desc_brg', $param);
      $sql->bindParam(':jml_brg', $param);
      $sql->bindParam(':kategori', $param);
      $sql->bindParam(':gambar_brg', $param);
      $sql->execute(); // Eksekusi querynya
    }else{ // Jika user belum mengklik tombol search
      // Buat query untuk menampilkan semua data siswa
      $sql = $pdo->prepare($con,"SELECT * FROM barang");
      $sql->execute(); // Eksekusi querynya
    }
?>

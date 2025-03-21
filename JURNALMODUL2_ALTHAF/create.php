<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $judul = $_POST['judul']; 
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // Definisikan query untuk insert data
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) 
              VALUES ('$judul', '$penulis', '$tahun_terbit');";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href='katalog_buku.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan: " . mysqli_error($conn) . "');</script>";
    }
}
?>

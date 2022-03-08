<?php
    require "db.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    mysqli_query($koneksi, "INSERT INTO tb_user(nama, alamat, pekerjaan) VALUES ('$nama', '$alamat', '$pekerjaan') ");

    header("location:index.php?berhasil_tambah_data");

?>
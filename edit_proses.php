<?php
    require "db.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id' ");

    header("location:index.php?berhasil_edit_data");

?>
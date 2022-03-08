<?php
    require "db.php";

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM tb_user WHERE id='$id' ");

    header("location:index.php?berhasil_hapus_data");

?>
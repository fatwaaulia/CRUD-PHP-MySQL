<?php require "db.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, th, td {border: 1px solid black}
            table tr th,td {padding:10px}
            input {padding: 3px}
            a {text-decoration: none}
            .input-group {margin: 10px auto}
        </style>
        <title>CRUD PHP | Fatwa Media</title>
    </head>
    <body>
        <div>
            <h3>TABEL PENGGUNA</h3>
            <a href="form_tambah.php">
                <button type="button" style="color:blue">+ Tambah data</button>
            </a>
            <table style="margin-top:10px">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $data_pengguna = mysqli_query($koneksi, "SELECT * FROM tb_user");
                        foreach ($data_pengguna as $key => $data) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['alamat']?></td>
                        <td><?=$data['pekerjaan']?></td>
                        <td>
                            <a href="form_edit.php?id=<?=$data['id']?>">
                                <button style="color:blue">Edit</button>
                            </a> | 
                            <a href="hapus_proses.php?id=<?=$data['id']?>">
                                <button style="color:red">Hapus</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
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
            <h3>Form Edit</h3>

            <?php $id = $_GET['id'];
                $data_pengguna = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id='$id' ");
                foreach ($data_pengguna as $data) { 
            ?>

            <form action="edit_proses.php" method="post">
                <div class="input-group">
                    <label>Nama :</label> <br>
                    <input type="hidden" name="id" value="<?=$data['id']?>">
                    <input type="text" name="nama" value="<?=$data['nama']?>">
                </div>
                <div class="input-group">
                    <label>Alamat :</label> <br>
                    <input type="text" name="alamat" value="<?=$data['alamat']?>">
                </div>
                <div class="input-group">
                    <label>Pekerjaan :</label> <br>
                    <input type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>">
                </div>
                <a href="index.php">
                    <button type="button" style="color:black">Kembali</button>
                </a> |
                <button type="submit" style="color:blue">Update</button>
            </form>

            <?php } ?>

        </div>

    </body>
</html>
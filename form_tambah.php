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
            <h3>Form Tambah</h3>
            <form action="tambah_proses.php" method="post">
                <div class="input-group">
                    <label>Nama :</label> <br>
                    <input type="text" name="nama">
                </div>
                <div class="input-group">
                    <label>Alamat :</label> <br>
                    <input type="text" name="alamat">
                </div>
                <div class="input-group">
                    <label>Pekerjaan :</label> <br>
                    <input type="text" name="pekerjaan">
                </div>
                <button type="submit" style="color:blue">+ Tambah</button>
            </form>
        </div>

    </body>
</html>
<?php include("config.php"); ?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus Siswa Baru | P Web Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h3 {
            margin: 0;
        }

        nav {
            text-align: center;
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 1.2em;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #4CAF50;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
            color: white;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .total {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

    </style>
</head>
<body>

<header>
    <h3>Siswa yang sudah mendaftar</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah Baru</a>
</nav>

<br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Gambar Siswa</th>
            <th>Pegawai Bertanggung Jawab</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
         <?php
        $sql = "SELECT calon_siswa.*, pegawai.nama_pegawai 
                FROM calon_siswa 
                LEFT JOIN pegawai ON calon_siswa.id_pegawai = pegawai.id_pegawai";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td><img src='uploads/".$siswa['foto']."' width='100' alt='Foto'></td>";
            echo "<td>".$siswa['nama_pegawai']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<br><br><br><br>
<header>
    <h3>Daftar Pegawai</h3>
</header>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM pegawai";
        $query = mysqli_query($db, $sql);

        while ($pegawai = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$pegawai['id_pegawai']."</td>";
            echo "<td>".$pegawai['nama_pegawai']."</td>";
            echo "<td>".$pegawai['jabatan']."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>

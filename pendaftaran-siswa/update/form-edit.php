<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Kursus Siswa | P Web Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            margin-bottom: 30px;
        }

        h3 {
            margin: 0;
        }

        form {
            width: 60%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
            padding: 0;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }
    </style>
</head>
<body>

<header>
    <h3>Formulir Edit Siswa</h3>
</header>

<form action="proses-edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" required />
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" placeholder="Alamat lengkap" required><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" required>
                <option value="Islam" <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option value="Kristen" <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option value="Budha" <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option value="Katolik" <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" required />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
    </fieldset>
</form>
<br><br><br><br><br><br><br><br>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Kursus Siswa Baru | P Web Coding</title>
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
    <h3>Formulir Pendaftaran Kursus Siswa Baru</h3>
</header>

<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <p>
            <label for="id_pegawai">Pegawai yang Bertanggung Jawab:</label>
            <select name="id_pegawai" required>
                <option value="1">Budi Santoso</option>
                <option value="2">Ani Wijaya</option>
                <option value="3">Rudi Hartono</option>
            </select>
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap" required />
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" placeholder="Alamat lengkap" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <select name="agama" required>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required />
        </p>
        <p>
            <label for="foto">Foto:</label>
            <input type="file" name="foto" accept="image/*" required />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
    </fieldset>
</form>

</body>
</html>

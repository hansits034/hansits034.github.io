<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    echo "<div class='error-message'>Gagal terhubung dengan database: " . mysqli_connect_error() . "</div>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }

        .success-message, .error-message {
            padding: 20px;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            margin: 20px 0;
        }

        .success-message {
            background-color: #4CAF50; /* Green */
        }

        .error-message {
            background-color: #f44336; /* Red */
        }
    </style>
</head>
<body>

    <div class="container">
        <?php if ($db): ?>
            <div class="success-message">
                Koneksi ke database berhasil!
            </div>
        <?php endif; ?>
    </div>

</body>
</html>

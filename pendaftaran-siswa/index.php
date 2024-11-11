<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus Siswa Baru | P Web Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        header h1 {
            margin-top: 10px;
            font-size: 2.5em;
        }

        h4 {
            font-size: 1.5em;
            color: #333;
            margin-top: 30px;
            text-align: center;
        }

        nav {
            text-align: center;
            margin-top: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 1.2em;
            color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #45a049;
            color: white;
        }

        p {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

        /* Status message styling */
        .status-message {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
            color: #333;
        }

        .status-message.success {
            color: green;
        }

        .status-message.error {
            color: red;
        }

        .pict {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .pict img {
            max-width: 650px;
            width: 100%;
            height: auto;
        }

    </style>
</head>
<body>

<header>
    <h3>Pendaftaran Kursus Siswa Baru</h3>
    <h1>P Web Coding</h1>
</header>

<div class="pict">
    <img src="./pendaftaran.jpg" alt="img">
</div>

<h4>Menu</h4>
<nav>
    <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
    </ul>
</nav>

<?php if(isset($_GET['status'])): ?>
    <p class="status-message <?php echo ($_GET['status'] == 'sukses') ? 'success' : 'error'; ?>">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

</body>
</html>

<?php
include("config.php");

if(isset($_POST['daftar'])){
    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Proses upload foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);

    if(move_uploaded_file($tmp, $target_file)){
        $sql = "INSERT INTO calon_siswa (id_pegawai, nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) 
                VALUES ('$id_pegawai', '$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("Gagal mengunggah foto.");
    }
} else {
    die("Akses dilarang...");
}
?>

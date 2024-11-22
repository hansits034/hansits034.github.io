<?php
include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_siswa SET 
            nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', 
            agama='$agama', sekolah_asal='$sekolah_asal'";

    // Proses upload foto jika ada file baru
    if(!empty($_FILES['foto']['name'])){
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto);

        if(move_uploaded_file($tmp, $target_file)){
            $sql .= ", foto='$foto'";
        } else {
            die("Gagal mengganti foto.");
        }
    }

    $sql .= " WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan perubahan.");
    }
} else {
    die("Akses dilarang...");
}
?>

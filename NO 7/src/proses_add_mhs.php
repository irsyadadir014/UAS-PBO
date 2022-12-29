<?php
include 'connection.php';

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$foto = "img1.png";
$email = $_POST['email'];

$query = "INSERT INTO tbl_mhs VALUES(null, '$nim', '$nama_mhs', '$jk', '$alamat', '$prodi', '$foto', '$email')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}

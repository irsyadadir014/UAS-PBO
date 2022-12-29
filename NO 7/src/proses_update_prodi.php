<?php
include 'connection.php';

$id_prodi = $_POST['id_prodi'];
$jenjang = $_POST['jenjang'];
$nama_prodi = $_POST['nama_prodi'];

$query = "UPDATE tbl_prodi SET jenjang = '$jenjang', nama_prodi = '$nama_prodi' WHERE id_prodi = '$id_prodi' ";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: prodi.php");
} else {
    echo $query;
}

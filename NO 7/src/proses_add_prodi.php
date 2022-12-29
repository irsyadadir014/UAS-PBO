<?php
include 'connection.php';

$jenjang = $_POST['jenjang'];
$nama_prodi = $_POST['nama_prodi'];

$query = "INSERT INTO tbl_prodi VALUES(null, '$jenjang', '$nama_prodi')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: prodi.php");
} else {
    echo $query;
}

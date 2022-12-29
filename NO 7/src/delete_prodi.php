<?php
include 'connection.php';

$id_prodi = $_GET['id_prodi'];
$query = "DELETE FROM tbl_prodi WHERE id_prodi = '$id_prodi';";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: prodi.php");
} else {
    echo $query;
}

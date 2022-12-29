<?php
include 'connection.php';

$id_mhs = $_GET['id_mhs'];
$query = "DELETE FROM tbl_mhs WHERE id_mhs = '$id_mhs';";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}

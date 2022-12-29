<?php
include 'connection.php';

$query = "SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_mhs.prodi = tbl_prodi.id_prodi INNER JOIN tbl_jk ON tbl_mhs.jk = tbl_jk.id_jk;";
$sql = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.png" />
    <title>Home | Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sistem Informasi Irsyad Adi Rochman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="prodi.php">Data Program Studi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <h3>Data Mahasiswa</h3>
            <a href="add_data.php" class="btn btn-success mb-2">Add Data</a>
            <table class="table table-bordered table-hover text-center">
                <tr class="table-dark">
                    <td>No</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Program Studi</td>
                    <td>Foto</td>
                    <td>E-mail</td>
                    <td>Action</td>
                </tr>
                <?php
                $i = 1;
                while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['nim']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama_mhs']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama']; ?>
                        </td>
                        <td>
                            <?php echo $data['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama_prodi']; ?>
                        </td>
                        <td>
                            <img src="img/<?php echo $data['foto']; ?>" alt="" style="max-width: 100px;">
                        </td>
                        <td><?php echo $data['email']; ?></td>
                        <td>
                            <a href="update_page_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" class="btn btn-primary">Update</a>
                            <a href="delete_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
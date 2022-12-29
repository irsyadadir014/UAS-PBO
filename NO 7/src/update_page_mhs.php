<?php
include 'connection.php';

$id_mhs = $_GET['id_mhs'];
$query = "SELECT * FROM tbl_mhs WHERE id_mhs = '$id_mhs';";
$sql = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.png" />
    <title>Update | Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sistem Informasi Irsyad Adi Rochman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <h3>Form Data Mahasiswa</h3>
            <form method="POST" action="proses_update_mhs.php">
                <?php
                $i = 1;
                while ($data_mhs = mysqli_fetch_assoc($sql)) {
                ?>
                    <input type="hidden" value="<?php echo $data_mhs['id_mhs']; ?>" name="id_mhs">
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="number" class="form-control" value="<?php echo $data_mhs['nim']; ?>" name="nim" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $data_mhs['nama_mhs']; ?>" name="nama_mhs" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk" aria-label="Default select example">
                            <?php
                            $query_jk = "SELECT * FROM tbl_jk";
                            $sql_jk = mysqli_query($conn, $query_jk);
                            while ($data_jk = mysqli_fetch_assoc($sql_jk)) {
                            ?>
                                <option value="<?php echo $data_jk['id_jk']; ?>"><?php echo $data_jk['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $data_mhs['alamat']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select" name="prodi" aria-label="Default select example">
                            <?php
                            $query_prodi = "SELECT * FROM tbl_prodi";
                            $sql_prodi = mysqli_query($conn, $query_prodi);
                            while ($data_prodi = mysqli_fetch_assoc($sql_prodi)) {
                            ?>
                                <option value="<?php echo $data_prodi['id_prodi']; ?>"><?php echo $data_prodi['nama_prodi']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3 row">
                <label for="Foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-label" id="Foto" required value="<?php echo $foto; ?>">
                </div>
            </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" value="<?php echo $data_mhs['email']; ?>" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <?php } ?>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
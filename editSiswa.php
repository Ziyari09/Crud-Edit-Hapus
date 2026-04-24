<?php
include_once 'Controller/SiswaController.php';

$id = $_GET['id'];
$siswa = new siswa;
if (isset($_POST['submit'])) {
    $editsiswa = $siswa->editsiswa($_GET['id'], $_POST['nama_siswa'],  $_POST['email'],  $_POST['jenis_kelamin']);
    if ($editsiswa) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';

        echo '<div class="alert alert-success" role="alert">Siswa Berhasil DiUpdate!</div>';


        echo "<script>
            setTimeout(function() {
                window.location = 'index.php';
            }, 2000);
          </script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>


    <div class="mt-3 ms-5 w-50">
        <a href="index.php" class="text-decoration-none btn-primary p-2 rounded-3 mt-5 ">⬅</a>
    </div>

    <div class="container mt-5 ">
        <h1>Edit Siswa</h1>

        <?php
        $data = $siswa->getSiswaByid($id);

        foreach ($data as $data) {
        ?>
            <form action="" method="POST" class="mt-5">
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" value="<?= $data['nama_siswa'] ?>" name="nama_siswa" id="nama_siswa">
                    <div id="nama_siswa" class="form-text">Inputkan nama Siswa</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?= $data['email'] ?>" name="email" id="email">
                    <div id="nama_siswa" class="form-text">Inputkan nama Siswa</div>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?= $data['jenis_kelamin'] ?>" name="jenis_kelamin" id="jenis_kelamin">
                    <div id="nama_siswa" class="form-text">Inputkan Jenis Kelamin</div>
                </div>

                <input type="submit" name="submit" value="Tambah Siswa" class="btn-primary rounded p-2">
            </form>
        <?php
        }



        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
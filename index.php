<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container mt-5">
        <a href="addsiswa.php" class="btn-success p-1 rounded text-decoration-none">Tambah Siswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'Controller/SiswaController.php';
                $siswa = new siswa;

                $row = $siswa->getAll();

                $number = 1;
                foreach ($row as $item) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $number  ?></th>
                        <td><?php echo $item['nama_siswa'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['jenis_kelamin'] ?></td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="deleteSiswa.php?id=<?= $item['id'] ?>" class="btn btn-danger">Hapus</a>

                        </td>
                        
                       
                    </tr>
                        <?php
                        $number++;
                    }
                        ?>
                        
                    
                  
            </tbody>
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>
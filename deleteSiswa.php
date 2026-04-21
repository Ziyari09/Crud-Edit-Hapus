<?php

include_once 'Controller/SiswaController.php';

$id = $_GET['id'];
$siswa = new siswa;

$deleteSiswa = $siswa->deleteSiswa($id);
if($deleteSiswa){
      echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';

    echo '<div class="alert alert-success" role="alert">Siswa Berhasil Dihapus!</div>';
    
    
    echo "<script>
            setTimeout(function() {
                window.location = 'index.php';
            }, 2000);
          </script>";
}
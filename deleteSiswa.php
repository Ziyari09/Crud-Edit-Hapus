<?php

include_once 'Controller/SiswaController.php';

$id = $_GET['id'];
$siswa = new siswa;

$deleteSiswa = $siswa->deleteSiswa($id);
if($deleteSiswa){
      echo "<script>alert('Siswa Berhasil Dihapus!');window.location = 'index.php'; </script>";
}
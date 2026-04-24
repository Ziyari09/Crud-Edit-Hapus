<?php

class siswa {
    public $siswa;
    public $pdo;

    public function __construct()
    {
      $host = "localhost";
      $database = "sekolah";
      $user = "root"; 
      $password = "";
    
      $this->pdo = new PDO("mysql:host={$host}; dbname={$database}", $user,$password);
    }

    public function getAll()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM siswa ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function addsiswa($nama_siswa, $email, $jenis_kelamin)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO siswa ( nama_siswa, email, jenis_kelamin) VALUES ( '".$nama_siswa."', '".$email."', '".$jenis_kelamin."')";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function deleteSiswa($id)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "DELETE FROM siswa WHERE id = '" . $id . "'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function getSiswaByid($id)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM siswa WHERE id = $id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function editsiswa($id,$nama_siswa,$email,$jenis_kelamin)
    {
         $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $query = "INSERT INTO  siswa(id, nama_siswa, email, jenis_kelamin) VALUES ('".$id."', '".$nama_siswa."','".$email."', '".$jenis_kelamin."' ) ON DUPLICATE KEY UPDATE id=VALUES(id), nama_siswa=VALUES(nama_siswa), email=VALUES(email), jenis_kelamin=VALUES(jenis_kelamin)";
         $stmt = $this->pdo->prepare($query); 
         $stmt->execute();
         return $stmt->rowCount();
    }

    

}
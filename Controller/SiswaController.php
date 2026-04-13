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

}
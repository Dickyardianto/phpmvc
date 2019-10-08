<?php

class Mahasiswa_model {
    //Menggunakan fitur Array 2 Dimensi
    // private $mhs = [
    //     [
    //         "nama" => "Dicky Ardianto",
    //         "nrp" => "173040046",
    //         "email" => "dikiardianto19@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Adhy Wiranto S",
    //         "nrp" => "173040047",
    //         "email" => "ahys@gmail.com",
    //         "jurusan" => "Informasi System"
    //     ],
    //     [
    //         "nama" => "Ardiansyah",
    //         "nrp" => "173040048",
    //         "email" => "Ardysh@gmail.com",
    //         "jurusan" => "Teknik Komputer"
    //     ]
    // ];


    //Menggunakan koneksi database
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) { 
            die($e->getMessage());
        }
    }

     
    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
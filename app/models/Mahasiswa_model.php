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
    // private $dbh;
    // private $stmt;
    private $table = 'mahasiswa';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM  ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaByID($id) {
        $this->db->query('SELECT * FROM  ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();        
    }

}
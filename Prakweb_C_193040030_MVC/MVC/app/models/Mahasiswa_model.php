<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // private $mhs =[
    //     [
    //         "nama" => "Antasafariq Fikriansyah",
    //         "nrp" => "193040030",
    //         "email" => "antasafrik@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Antasafariq Fikriansyah",
    //         "nrp" => "193040030",
    //         "email" => "antasafrik@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Antasafariq Fikriansyah",
    //         "nrp" => "193040030",
    //         "email" => "antasafrik@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Antasafariq Fikriansyah",
    //         "nrp" => "193040030",
    //         "email" => "antasafrik@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->db->query('SELEC * FROM' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELEC * SROM' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) 
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :nrp, :jurusan)";

        $this->db->query($query);
        $this->db->blind('nama', $data['nama']);
        $this->db->blind('nrp', $data['nrp']);
        $this->db->blind('email', $data['email']);
        $this->db->blind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data) 
    {
        $query =   "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan =  :jurusan
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->blind('nama', $data['nama']);
        $this->db->blind('nrp', $data['nrp']);
        $this->db->blind('email', $data['email']);
        $this->db->blind('jurusan', $data['jurusan']);
        $this->db->blind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $thid->db->query($query);
        $this->db->bind('keyword', "%keyword%");
        return $this->db->resultSet();
    }



}
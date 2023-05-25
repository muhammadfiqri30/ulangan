<?php
class mahasiswa {
    private $hostname = 'localhost';
    private $nim = 'root';
    private $nama = '';
    private $database = 'mahasiswa';

    private $koneksi;

    function __construct()
    {
        return $this->koneksi = mysqli_connect($this->hostname, $this->nim, $this->nama, $this->database);
    }

    public function query($query)
    {
        return mysqli_query($this->koneksi, $query);
    }
    
    public function ambilSemuaData()
    {
        $data = $this->query("SELECT * FROM tb_mahasiswa");
        $result = [];

        while($mahasiswa = mysqli_fetch_array($data))
        {
            array_push($result, $mahasiswa);
        }

        return $result;
    }

    public function cariId($id)
    {   
        $data = $this->query("SELECT * FROM tb_mahasiswa WHERE id=$id");
        $result = [];

        while($mahasiswa = mysqli_fetch_array($data))
        {
            array_push($result, $mahasiswa);
        }

        return $result;
    }
}
?>
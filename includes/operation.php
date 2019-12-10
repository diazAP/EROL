<?php
    //Kelas Erol
    class Erol{
        public function __construct(){
            $this->db = new PDO('mysql:host=*host*;dbname=*dbname*','*username*','*password*');
        }
        
        /*Mendefinisikan fungsi untuk mencegah para hacker
        untuk melakukan header injection > salah satu metode untuk meretas sistem*/
        function has_header_injection($str){
            return preg_match("/[\r\n]/",$str);
        }

        //Fungsi Create
        public function createData($fname, $nim, $penting, $jadwal, $sesi, $ruang){
            $sql = "INSERT INTO pesan (fname, nim, penting, jadwal, sesi, ruang) VALUES('$fname', '$nim', '$penting', '$jadwal', '$sesi', '$ruang')";
            $query = $this->db->query($sql);
            return $query;
        }

        //Fungsi Read
        public function readData(){
            $sql = "SELECT * FROM pesan ORDER BY timeInput DESC";
            $query = $this->db->query($sql);
            return $query;
        }

        //Fungsi Read by Id
        public function readbyId($pesanId){
            $sql = "SELECT * FROM pesan WHERE pesanId='$pesanId'";
            $query = $this->db->query($sql);
            return $query;
        }

        //Fungsi untuk menghitung jumlah data yang sama pada database
        public function cekData($jadwal, $sesi, $ruang){
            $sql = "SELECT COUNT(*) FROM pesan WHERE jadwal = '$jadwal' AND sesi = '$sesi' AND ruang = '$ruang'";
            $query = $this->db->query($sql);
            return $query;
        }

        //Fungsi Update
        public function updateData($pesanId, $fname, $nim, $penting, $jadwal, $sesi, $ruang){
            $sql = "UPDATE pesan SET fname='$fname', nim='$nim', penting='$penting', jadwal='$jadwal', sesi='$sesi', ruang='$ruang' WHERE pesanId='$pesanId'";
            $query = $this->db->query($sql);
            return $query;
        }

        //Fungsi Delete
        public function deleteData($pesanId){
            $sql = "DELETE FROM pesan WHERE pesanId='$pesanId'";
            $query = $this->db->query($sql);
            return $query;
        }

        // //Fungsi Order By Name ASC
        // public function obnameASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY fname ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Name DESC
        // public function obnameDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY fname DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By NIM ASC
        // public function obnimASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY nim ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By NIM DESC
        // public function obnimDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY nim DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Kepentingan ASC
        // public function obpentingASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY penting ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }
        
        // //Fungsi Order By Kepentingan DESC
        // public function obpentingDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY penting DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Jadwal ASC
        // public function objadwalASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY jadwal ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Jadwal DESC
        // public function objadwalDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY jadwal DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Ruang ASC
        // public function obruangASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY ruang ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Ruang DESC
        // public function obruangDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY ruang DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Waktu Input ASC
        // public function obtimeASC(){
        //     $sql = "SELECT * FROM pesan ORDER BY timeInput ASC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }

        // //Fungsi Order By Waktu Input DESC
        // public function obtimeDESC(){
        //     $sql = "SELECT * FROM pesan ORDER BY timeInput DESC";
        //     $query = $this->db->query($sql);
        //     return $query;
        // }
    }
?>

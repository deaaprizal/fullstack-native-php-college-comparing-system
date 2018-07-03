<?php

    include "Database_Connection.php";
    /**
     *
     */
    class Banding_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk banding kampus
      public function Kampus($kampus){
          $sql = "SELECT tbl_kampus.id, tbl_kampus.nama_kampus,
		      SUM(tbl_nilai.dosen) as dosen,
		      SUM(tbl_nilai.jurusan) as jurusan,
		      SUM(tbl_nilai.lingkungan) as lingkungan,
		      SUM(tbl_nilai.prestasi) as prestasi,
		      SUM(tbl_nilai.mata_kuliah) as mata_kuliah,
		      SUM(tbl_nilai.biaya) as biaya
          FROM tbl_kampus join tbl_nilai on tbl_kampus.id = tbl_nilai.id_kampus WHERE nama_kampus = '$kampus'";
          $query = mysql_query($sql);
		      $row = mysql_fetch_array($query);
          return $row;
      }

      //function untuk ranking Kampus
      public function rankingKampus(){

        $sql = "SELECT tbl_kampus.id, tbl_kampus.alamat, tbl_kampus.alamat, tbl_kampus.foto, tbl_kampus.slogan, tbl_kampus.nama_kampus,
		      SUM(tbl_nilai.dosen) as dosen,
		      SUM(tbl_nilai.jurusan) as jurusan,
		      SUM(tbl_nilai.lingkungan) as lingkungan,
		      SUM(tbl_nilai.prestasi) as prestasi,
		      SUM(tbl_nilai.mata_kuliah) as mata_kuliah,
		      SUM(tbl_nilai.biaya) as biaya
          FROM tbl_kampus join tbl_nilai on tbl_kampus.id = tbl_nilai.id_kampus GROUP BY tbl_kampus.nama_kampus DESC";
      }


    }

?>

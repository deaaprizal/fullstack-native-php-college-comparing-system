<?php

    include_once "Database_Connection.php";
    /**
     *
     */
    class Survei_model{

      public function __construct(){
          $connection = new Database_Connection();
      }

      //function untuk menampilkan pertanyaan
      public function pertanyaan(){
          $sql = "SELECT * FROM tbl_pertanyaan";
          $query = mysql_query($sql);
          return $query;
      }

	  //function menampilkan data kampus
	  public function ambilkampus(){
          $sql = "SELECT * FROM tbl_kampus";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk input nilai survei
      public function inputNilai($kampus, $username, $akreditasi, $dosen, $jurusan, $lingkungan, $prestasi, $mata_kuliah, $biaya){

          $sql = "INSERT INTO `tbl_nilai` VALUES (null,'$kampus','$username', '$akreditasi', '$dosen', '$jurusan', '$lingkungan', '$prestasi', '$mata_kuliah', '$biaya');";
          $query = mysql_query($sql);
          return $query;
      }

      //function untuk validasi username
      public function viewUser($username){

          $sql = "SELECT * FROM tbl_nilai WHERE username = '$username'";
          $query = mysql_query($sql);
          $check = mysql_num_rows($query);
          return $check;
      }
    }

?>

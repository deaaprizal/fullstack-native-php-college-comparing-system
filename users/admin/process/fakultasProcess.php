<?php
	include "../../../model/Fakultas_model.php";

	$fks = new Fakultas_model();

	$fakultas = $_POST['fakultas'];
	$nama_kampus = $_POST['nama_kampus'];

	$fks->insertFakultas($fakultas,$nama_kampus);
	if($fks == TRUE){
		header('location:../kampus.php');
	} else {
		echo "gagal";
	}

?>
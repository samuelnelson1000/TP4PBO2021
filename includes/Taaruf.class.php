<?php

/**
 * 
 */
class Taaruf extends DB
{
	
	function getTaaruf()
	{
		# metode mengambil data tabel
		$query = "SELECT * from taaruf";
		return $this->execute($query);
	}

	function setTaaruf($nim="", $nama ="" , $notelp="" , $kelas="" , $asald="" , $status="" ){
		// query insert data ke tb taaruf
		$query = "INSERT INTO taaruf (nim, nama, nomor_telepon, kelas, asal_daerah, status_kenalan) values ( '$nim', '$nama', '$notelp', '$kelas', '$asald', '$status' ) ";

		// Mengeksekusi query
		return $this->execute($query);
		
	}

	function deleteTaaruf($id_hapus){
		// query delete 
		$query = "DELETE FROM taaruf where id = '$id_hapus'";
		// Mengeksekusi query
		return $this->execute($query);
	    // Unset GET
	    unset($_GET['id_hapus']);
	    // refresh
    	header("Location: index.php");
			
	}

	function updateSelesai($id_status){
		// query update selesai
		$query = "UPDATE taaruf SET status_kenalan = 'Sudah Kenal' where id = '$id_status'";
		// Mengeksekusi query
		return $this->execute($query);
	    // Unset GET
	    unset($_GET['id_status']);
	    // refresh
    	header("Location: index.php");
		
	}

}
?>
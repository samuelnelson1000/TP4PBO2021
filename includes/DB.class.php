<?php

/**
 * 
 */
class DB
{
	var $db_host = '';
	var $db_user = '';
	var $db_password = '';
	var $db_name = '';
	var $db_link = '';
	var $result = 0;
	
	function DB($db_host = '', $db_user = '', $db_password = '', $db_name = '')
	{
		# konstruktor.
		$this->db_host = $db_host;
		$this->db_user = $db_user ;
		$this->db_password = $db_password ;
		$this->db_name = $db_name ;

	}

	function open(){
		// membuka koneksi
		$this->db_link = mysqli_connect($this->db_host,$this->db_user,$this->db_password, $this->db_name)or die(mysqli_error()); 
	}

	function execute($query='')
	{
		# eksekusi
		$this->result = mysqli_query($this->db_link, $query);
		return $this->result;
	}

	function getResult()
	{
		# mengambil hasil
		return mysqli_fetch_array($this->result);
	}

	function close()
	{
		# tutup koneksi
		mysqli_close($this->db_link);
	}

}

?>
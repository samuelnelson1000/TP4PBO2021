<?php

/**
 * 
 */
class Template
{

	var $filename = ''; // handle isi file
	var $content = ''; // handle isi file
	
	function Template($filename = '')
	{
		# konstruktor
		$this->filename = $filename;
		// membaca file tampilan
		$this->content = implode('', @file($filename));
	}

	function clear(){
		# membersihkan isi kode yang seharusnya diganti
		// mengganti tulisan DATA_.... dengan kosong jika ada yang lupa diganti
		$this->content = preg_replace("/DATA_[A-Z]_[0-9]+/", "", $this->content);
	}

	function write(){
		// menuliskan isi file ke layar
		// menghapus DATA_... yang belum diganti
		$this->clear();
		// tampilkan tampilan yang telah diganti kek layar
		print $this->content;
	}

	function getContent(){
		// mengambil isi file yang sudah diproses
		// menghapus DATA_... yang belum diganti
		$this->clear();
		// mengembalikan isi tampilan
		return $this->content;
	}

	function replace($old = '', $new = ''){
		// mengganti kode dalam file (DATA_...)
		// pemrosesan nilai yang akan menggantikan
		if (is_int($new)) {
			# jika penggantinya bilangan bulat(diubah formatnya ke teks)
			$value = sprintf("%d", $new);
		}elseif (is_float($new)) {
			# jika penggantinya bilangan real(diubah formatnya ke teks)
			$value = sprintf("%f", $new);
		}elseif (is_array($new)) {
			# jika penggantinya berupa array/tabel(diubah formatnya ke teks)
			$value = '';
			// pemrosesan setiap elemen array/tabel
			foreach ($new as $item) {
				$value .= $item. '';
			}
		}else{
			// jika selain tipe diatas maka langsung diisikan untuk menggantikan
			$value = $new;
		}
		// menggantukan suatu teks dengan teks baru 
		$this->content = preg_replace("/$old/" , $value, $this->content );
	}

}

?>
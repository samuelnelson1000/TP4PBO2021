<?php

// menyatukan kelas Template
include("conf.php");
include ("includes/Template.class.php");
include ("includes/DB.class.php");
include ("includes/Taaruf.class.php");

// memproses data yg akan mmenggantikan kode tampilan
$taaruf = new Taaruf($db_host, $db_user, $db_password, $db_name);
$taaruf->open();

if (isset($_POST['add'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$notelp = $_POST['notelp'];
	$kelas = $_POST['kelas'];
	$asald = $_POST['asald'];
	$status = "Baru Kenalan";

	$taaruf->setTaaruf($nim, $nama, $notelp, $kelas, $asald, $status);
}

if (isset($_GET['id_hapus'])) {
	$id = $_GET['id_hapus'];
	$taaruf->deleteTaaruf($id);

}

if(isset($_GET['id_status'])){
	$id = $_GET['id_status'];
	$taaruf->updateSelesai($id);
}

$taaruf->getTaaruf();

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $nim, $nama, $notelp, $kelas, $asald, $statusp) = $taaruf->getResult()) {
	if ($statusp == "Sudah Kenal") {
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $nim . "</td>
			<td>" . $nama . "</td>
			<td>" . $notelp . "</td>
			<td>" . $kelas . "</td>
			<td>" . $asald . "</td>
			<td>" . $statusp . "</td>
			<td>
			<button class='btn btn-danger' name = 'hapusbutton'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
			</td>
			</tr>";
			$no++;
	}else{
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $nim . "</td>
			<td>" . $nama . "</td>
			<td>" . $notelp . "</td>
			<td>" . $kelas . "</td>
			<td>" . $asald . "</td>
			<td>" . $statusp . "</td>
			<td>
			<button class='btn btn-danger' name = 'hapusbutton'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
				<button class='btn btn-success' name = 'donestatus'><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Kenalan</a></button>
			</td>
			</tr>";
			$no++;
	}
}

// menutup koneksi
$taaruf->close();
// membaca template skin tampilan
$tpl = new Template("templates/home.html");
// mengganti kode DATA_TABEL dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);
// menampilkan ke layar
$tpl->write();


?>
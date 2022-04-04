<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Add Data
	function addData(){
		$tname = $_POST['tname'];
		$tdeadline = $_POST['tdeadline'];
		$tdetail = $_POST['tdetail'];
		$tsubject = $_POST['tsubject'];
		$tpriority = $_POST['tpriority'];
		$tstatus = "Belum";

		// query
		$query = "INSERT INTO tb_to_do(name_td, details_td, subject_td, priority_td, deadline_td, status_td)
			VALUES('$tname', '$tdetail', '$tsubject', '$tpriority', '$tdeadline', '$tstatus')";

		return $this->execute($query);
	}

	// menghapus data
	function hapusData(){
		// query delete
		$query = "DELETE FROM tb_to_do WHERE id='" . $_GET["id_hapus"] . "'";
		return $this->execute($query);
	}

	function selesai(){

		// query update
		$query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id='" . $_GET["id_status"] . "'";
		return $this->execute($query);
	}


	// fungsi buat sorting
	function Subjek(){
		// query order by
		$query = "SELECT * FROM tb_to_do ORDER BY subject_td ASC";
		return $this->execute($query);
	}

	function Prioritas(){
		// query order by
		$query = "SELECT * FROM tb_to_do ORDER BY priority_td ASC";
		return $this->execute($query);
	}

	function Deadline(){
		// query order by
		$query = "SELECT * FROM tb_to_do ORDER BY deadline_td ASC";
		return $this->execute($query);
	}

	function Status(){
		// query order by
		$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";
		return $this->execute($query);
	}
	
}

?>
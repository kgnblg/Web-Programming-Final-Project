<?php
	class MusteriModel extends Model{
		public function insertQuery($adsoyad, $mail, $pass){
			$sql = "INSERT INTO musteriler (adsoyad, mail, pass) VALUES ('$adsoyad','$mail','$pass')";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($id, $adsoyad, $mail, $pass){
			$sql = "UPDATE musteriler SET adsoyad = '$adsoyad', mail = '$mail', pass = '$pass' WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($id){
			$sql = "DELETE FROM musteriler WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList(){
			$sql = "SELECT * FROM musteriler";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM musteriler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

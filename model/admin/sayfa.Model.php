<?php
	class SayfaModel extends Model{
		public function insertQuery($ad, $icerik){
			$sql = "INSERT INTO sayfalar (baslik, icerik) VALUES ('$ad', '$icerik')";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($id, $ad, $icerik){
			$sql = "UPDATE sayfalar SET baslik = '$ad', icerik='$icerik' WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($Id){
			$sql = "DELETE FROM sayfalar WHERE id='$Id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList(){
			$sql = "SELECT * FROM sayfalar";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($Id){
			$sql = "SELECT * FROM sayfalar WHERE id='$Id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

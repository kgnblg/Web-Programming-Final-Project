<?php
	class UrunbedenModel extends Model{
		public function insertQuery($uid, $beden, $stok){
			$sql = "INSERT INTO urunbedenler (urunid, beden, stok) VALUES ('$uid','$beden','$stok')";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($id, $beden, $stok){
			$sql = "UPDATE urunbedenler SET beden = '$beden', stok = '$stok' WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($id){
			$sql = "DELETE FROM urunbedenler WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQueryByUrun($id){
			$sql = "DELETE FROM urunbedenler WHERE urunid='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList($urunId){
			$sql = "SELECT * FROM urunbedenler WHERE urunid='$urunId'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM urunbedenler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

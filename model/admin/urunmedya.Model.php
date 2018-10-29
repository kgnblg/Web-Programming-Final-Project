<?php
	class UrunmedyaModel extends Model{
		public function insertQuery($uid, $url){
			$sql = "INSERT INTO urunresimler (urunid, resimurl) VALUES ('$uid','$url')";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($id){
			$sql = "DELETE FROM urunresimler WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQueryByUrun($urunId){
			$sql = "DELETE FROM urunresimler WHERE urunid='$urunId'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList($urunId){
			$sql = "SELECT * FROM urunresimler WHERE urunid='$urunId'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM urunresimler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

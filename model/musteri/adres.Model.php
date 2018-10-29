<?php
	class AdresModel extends Model{
		public function insertQuery($mid, $baslik, $adres){
			$sql = "INSERT INTO musteriadresler (musteriid, ad, adres) VALUES ('$mid','$baslik','$adres')";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($id){
			$sql = "DELETE FROM musteriadresler WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList($mid){
			$sql = "SELECT * FROM musteriadresler WHERE musteriid='$mid'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}
	}
?>

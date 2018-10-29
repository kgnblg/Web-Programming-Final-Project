<?php
	class KategoriModel extends Model{
		public function insertQuery($categoryName){
			$sql = "INSERT INTO kategori (ad) VALUES ('$categoryName')";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($categoryId, $categoryName){
			$sql = "UPDATE kategori SET ad = '$categoryName' WHERE id='$categoryId'";
			return $this->db->query($sql) ? true : false;
		}	

		public function deleteQuery($categoryId){
			$sql = "DELETE FROM kategori WHERE id='$categoryId'";
			return $this->db->query($sql) ? true : false;
		}	

		public function getList(){
			$sql = "SELECT * FROM kategori";
			$output = array();
			$list = $this->db->query($sql);
			
			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($categoryId){
			$sql = "SELECT * FROM kategori WHERE id='$categoryId'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>
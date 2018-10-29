<?php
	class KategoriModel extends Model{
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

<?php
	class UrunModel extends Model{
		public function getListByCategory($id){
			$sql = "SELECT * FROM urunler WHERE kategoriid='$id'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function last10Rows(){
			$sql = "SELECT * FROM urunler ORDER BY id DESC LIMIT 12";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM urunler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

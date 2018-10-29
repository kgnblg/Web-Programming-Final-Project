<?php
	class UrunbedenModel extends Model{
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

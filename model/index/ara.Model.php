<?php
	class AraModel extends Model{
		public function searchQuery($ara){
			$sql = "SELECT * FROM urunler WHERE ad LIKE '%$ara%'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}
	}
?>

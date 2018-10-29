<?php
	class AraModel extends Model{
		public function searchQuery($ara, $tablo){
      if ($tablo == "urunler") {
        $sutun = "ad";
      }else if ($tablo == "siparisler") {
        $sutun = "id";
      }else{
        $sutun = "adsoyad";
      }

			$sql = "SELECT * FROM $tablo WHERE $sutun LIKE '%$ara%'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}
	}
?>

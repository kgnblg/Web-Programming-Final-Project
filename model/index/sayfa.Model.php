<?php
	class SayfaModel extends Model{
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

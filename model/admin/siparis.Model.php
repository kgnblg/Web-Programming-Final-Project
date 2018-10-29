<?php
	class SiparisModel extends Model{
		public function deleteQuery($Id){
			$sql = "DELETE FROM tamamlanansiparisler WHERE id='$Id'";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($id, $durum){
			$sql = "UPDATE tamamlanansiparisler SET durum = '$durum' WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList(){
			$sql = "SELECT * FROM tamamlanansiparisler";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM tamamlanansiparisler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

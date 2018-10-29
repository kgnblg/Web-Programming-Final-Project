<?php
	class ContactModel extends Model{
		public function deleteQuery($id){
			$sql = "DELETE FROM iletisim WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList(){
			$sql = "SELECT * FROM iletisim";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM iletisim WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

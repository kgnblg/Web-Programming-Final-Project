<?php
	class SayacModel extends Model{
		public function getDates(){
			$sql = "SELECT * FROM ziyaretcisayac WHERE id='1'";
			$list = $this->db->query($sql);
			$output = $list->fetch_object();

			return $output;
		}
	}
?>

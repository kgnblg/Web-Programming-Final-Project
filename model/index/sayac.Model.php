<?php
	class SayacModel extends Model{
		public function updateQuery(){
			$sql = "UPDATE ziyaretcisayac SET ziyaretci = ziyaretci+1 WHERE id='1'";
			return $this->db->query($sql) ? true : false;
		}
	}
?>

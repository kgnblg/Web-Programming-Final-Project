<?php
	class MusteriadresModel extends Model{
		public function takeLine($Id){
			$sql = "SELECT * FROM musteriadresler WHERE id='$Id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>

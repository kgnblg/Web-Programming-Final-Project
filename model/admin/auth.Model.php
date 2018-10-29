<?php
  class AuthModel extends Model{
		public function takeLine($nick, $pass){
			$sql = "SELECT * FROM adminauth WHERE nick='$nick' AND pass='$pass'";
			$data = $this->db->query($sql);
			return $data->num_rows;
		}
  }
?>

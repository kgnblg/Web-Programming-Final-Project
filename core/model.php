<?php
	class Model{
		public $db;

		public function openConnection(){
			$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			if ($this->db->connect_error)
				echo $this->db->connect_error;

			$this->db->set_charset(CHARSET);
		}
	}
?>
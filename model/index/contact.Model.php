<?php
	class ContactModel extends Model{
		public function insertQuery($ad, $mail, $mesaj){
			$sql = "INSERT INTO iletisim (ad,mail,mesaj) VALUES ('$ad','$mail','$mesaj')";
			return $this->db->query($sql) ? true : false;
		}
	}
?>

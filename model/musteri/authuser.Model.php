<?php
  class AuthuserModel extends Model{
		public function takeLine($mail, $pass){
			$sql = "SELECT * FROM musteriler WHERE mail='$mail' AND pass='$pass'";
			$data = $this->db->query($sql);
      return $data->fetch_object();
		}

    public function takeLineById($id){
			$sql = "SELECT * FROM musteriler WHERE id='$id'";
			$data = $this->db->query($sql);
      return $data->fetch_object();
		}

    public function insertQuery($ad, $mail, $pass){
      $sql = "SELECT * FROM musteriler WHERE mail='$mail' AND pass='$pass'";
      if ($this->db->query($sql)->num_rows != 0)
        return false;

      $sql = "INSERT INTO musteriler (adsoyad, mail, pass) VALUES ('$ad','$mail','$pass')";
      return $this->db->query($sql) ? true : false;
    }

    public function updateQuery($id, $ad, $mail, $npass = null){
      if ($npass == null) {
        $sql = "UPDATE musteriler SET adsoyad = '$ad', mail='$mail' WHERE id='$id'";
      }else{
        $npass = md5($npass);
        $sql = "UPDATE musteriler SET adsoyad = '$ad', mail='$mail', pass='$npass' WHERE id='$id'";
      }

			return $this->db->query($sql) ? true : false;
		}
  }
?>

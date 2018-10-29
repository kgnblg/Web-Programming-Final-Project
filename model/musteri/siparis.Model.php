<?php
	class SiparisModel extends Model{
		public function insertQuery($mid, $uid, $beden, $adet, $ucret){
			$sql = "INSERT INTO siparisler (musteriid, urunid, beden, adet, tarih, toplamucret) VALUES ('$mid','$uid','$beden','$adet',NOW(),'$ucret')";
			return $this->db->query($sql) ? true : false;
		}

		public function deleteQuery($Id){
			$sql = "DELETE FROM siparisler WHERE id='$Id'";
			return $this->db->query($sql) ? true : false;
		}

		public function getList($mid){
			$sql = "SELECT * FROM siparisler WHERE musteriid='$mid'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function insertCompletedCart($mid, $detay, $tutar, $adresid){
			$sql = "INSERT INTO tamamlanansiparisler (mid, detaylar, tarih, tutar, durum, adres) VALUES ('$mid','$detay',NOW(),'$tutar','Onay Bekliyor','$adresid')";
			return $this->db->query($sql) ? true : false;
		}

		public function getCompletedCartList($mid){
			$sql = "SELECT * FROM tamamlanansiparisler WHERE mid='$mid'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}
	}
?>

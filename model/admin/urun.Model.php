<?php
	class UrunModel extends Model{
		public function insertQuery($kid, $ad, $aciklama, $fiyat){
			$sql = "INSERT INTO urunler (kategoriid, ad, tarih, aciklama, fiyat) VALUES ('$kid','$ad', NOW(), '$aciklama', '$fiyat')";
			return $this->db->query($sql) ? true : false;
		}

		public function updateQuery($id, $kid, $ad, $aciklama, $fiyat){
			$sql = "UPDATE urunler SET kategoriid = '$kid', ad = '$ad', tarih = NOW(), aciklama = '$aciklama', fiyat = '$fiyat' WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}	

		public function deleteQuery($id){
			$sql = "DELETE FROM urunler WHERE id='$id'";
			return $this->db->query($sql) ? true : false;
		}	

		public function getList(){
			$sql = "SELECT * FROM urunler";
			$output = array();
			$list = $this->db->query($sql);
			
			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function takeLine($id){
			$sql = "SELECT * FROM urunler WHERE id='$id'";
			$data = $this->db->query($sql);
			return $data->fetch_object();
		}
	}
?>
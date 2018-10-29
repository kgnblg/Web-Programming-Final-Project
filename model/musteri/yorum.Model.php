<?php
	class YorumModel extends Model{
		public function insertQuery($urunid, $yorum){
			$sql = "INSERT INTO urunyorumlar (urunid, yorum) VALUES ('$urunid','$yorum')";
			return $this->db->query($sql) ? true : false;
		}

		public function insertPointsQuery($urunid, $puan){
			$sql = "INSERT INTO urunpuanlar (urunid, puan) VALUES ('$urunid','$puan')";
			return $this->db->query($sql) ? true : false;
		}

		public function getYorumList($urunid){
			$sql = "SELECT * FROM urunyorumlar WHERE urunid='$urunid'";
			$output = array();
			$list = $this->db->query($sql);

			while ($getList = $list->fetch_object()) {
				$output[] = $getList;
			}

			return $output;
		}

		public function getPoints($urunid){
			$sql = "SELECT AVG(puan) as toplam FROM urunpuanlar WHERE urunid='$urunid'";
			$output = $this->db->query($sql);
			return $output->fetch_object();
		}
	}
?>

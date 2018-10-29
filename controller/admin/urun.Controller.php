<?php
	class Urun extends Controller{
		public function index(){
			if (@$this->params == "ekle") {
				$this->loadModel("admin","kategori");
				$viewTemplate = "urunekle";
				$this->loadView("admin","urun", array('kategoriler' => $this->model->getList()), $viewTemplate);
			}else{
				$this->loadModel("admin","urun");
				$urunlistesi = $this->model->getList();
				$butunlesikliste = array();
				$this->loadModel("admin","kategori");

				foreach ($urunlistesi as $urun) {
					$urun->kategoriadi = $this->model->takeLine($urun->kategoriid)->ad;
					$butunlesikliste[] = $urun;
				}

				$viewParams = array('urunliste' => $butunlesikliste);
				$viewTemplate = "urunliste";
				$this->loadView("admin","urun", $viewParams, $viewTemplate);
			}
		}

		public function ekle(){
			$this->loadModel("admin","urun");

			if (empty($_POST['kat']) || empty($_POST['ad']) || empty($_POST['ack']) || empty($_POST['fiyat'])) {
				$viewParams = array('eklendiDurum' => false);
			}else{
				$viewParams = array('eklendiDurum' => $this->model->insertQuery($_POST['kat'], $_POST['ad'], $_POST['ack'], $_POST['fiyat']));
			}

			$this->loadView("admin","urun",$viewParams,"uruneklendi");
		}

		public function sil(){
			if (empty($this->params)) {
				$viewParams = array('silindiDurum' => false);
			}else{
				if ($this->deleteImages($this->params)) {
					if ($this->model->deleteQueryByUrun($this->params)) {
						$this->loadModel("admin","urunbeden");
						if ($this->model->deleteQueryByUrun($this->params)) {
							$this->loadModel("admin","urun");
							if ($this->model->deleteQuery($this->params)) {
								$viewParams = array('silindiDurum' => true);
							}else{
								$viewParams = array('silindiDurum' => false);
							}
						}else{
							$viewParams = array('silindiDurum' => false);
						}
					}else{
						$viewParams = array('silindiDurum' => false);
					}
				}else{
					$viewParams = array('silindiDurum' => false);
				}
			}
			$this->loadView("admin","urun",$viewParams,"urunsilindi");
		}

		private function deleteImages($urunId){
			$this->loadModel("admin","urunmedya");
			foreach ($this->model->getList($urunId) as $urunmedya) {
				if (!unlink(UPLOAD_PATH . $urunmedya->resimurl)) {
					return false;
				}
			}

			return true;
		}

		public function duzenle(){
			if (empty($this->params)) {
				Header("Location: " . URL);
			}else{
				$this->loadModel("admin","urun");
				$getRow = $this->model->takeLine($this->params);

				foreach ($getRow as $key => $value) {
					$viewParams[$key] = $value;
				}

				$butunlesikliste = array();
				$this->loadModel("admin","kategori");

				foreach ($this->model->getList() as $kategori) {
					$butunlesikliste[] = array('id' => $kategori->id, 'ad' => $kategori->ad);
				}

				$viewParams['kategoriListe'] = $butunlesikliste;
 				$viewParams['currentKategori'] = array('ad' => $this->model->takeLine($getRow->kategoriid)->ad
 					, 'id' => $this->model->takeLine($getRow->kategoriid)->id);

				$this->loadView("admin","urun",$viewParams,"urunduzenle");
			}
		}
		public function duzenlendi(){
			$this->loadModel("admin","urun");

			if (empty($_POST['uid']) || empty($_POST['kat']) || empty($_POST['ad']) || empty($_POST['ack']) || empty($_POST['fiyat'])) {
				$viewParams = array('duzenlendiDurum' => false);
			}else{
				$viewParams = array('duzenlendiDurum' => $this->model->updateQuery($_POST['uid'], $_POST['kat'], $_POST['ad'], $_POST['ack'], $_POST['fiyat']));
			}

			$this->loadView("admin","urun",$viewParams,"urunduzenlendi");
		}

		public function detay(){
			$this->loadModel("admin","urun");

			if (!empty($this->params)) {
				$viewParams = $this->model->takeLine($this->params);
				$this->loadModel("admin","kategori");
				$viewParams->kategoriadi = $this->model->takeLine($viewParams->kategoriid)->ad;
				$this->loadModel("admin","urunyorum");
				$viewParams->yorumlar = $this->model->getYorumList($this->params);
				$viewParams->puan = $this->model->getPoints($this->params)->toplam;
				$this->loadView("admin","urun",$viewParams,"urundetay");
			}else{
				Header("Location: " . URL);
			}
		}

		public function yorumsil(){
			if (!empty($this->params)) {
				$this->loadModel("admin","urunyorum");
				$viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
				$this->loadView("admin","urun",$viewParams,"yorumsilindi");
			}else{
				Header("Location: " . URL);
			}
		}
	}
?>

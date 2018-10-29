<?php
	class Kategori extends Controller{
		public function index(){
			if (@$this->params == "ekle") {
				$viewTemplate = "kategoriekle";
				$this->loadView("admin","kategori", null, $viewTemplate);
			}else{
				$this->loadModel("admin","kategori");
				$viewParams = array('kategoriliste' => $this->model->getList());
				$viewTemplate = "kategoriliste";
				$this->loadView("admin","kategori", $viewParams, $viewTemplate);
			}
		}

		public function ekle(){
			$this->loadModel("admin","kategori");
			$categoryName = $_POST['ad'];
			if (!empty($categoryName)) {
				$viewParams = array('eklendiDurum' => $this->model->insertQuery($categoryName));
			}else{
				$viewParams = array('eklendiDurum' => false);
			}

			$viewTemplate = "kategorieklendi";
			$this->loadView("admin","kategori", $viewParams, $viewTemplate);
		}

		public function sil(){
			$this->loadModel("admin","kategori");
			$kategoriId = $this->params+0;
			$viewTemplate = "kategorisil";

			if ($kategoriId == 0) {
				$viewParams = array('silindiDurum' => false);
			}else{
				$viewParams = array('silindiDurum' => $this->model->deleteQuery($kategoriId));
			}

			$this->loadView("admin","kategori", $viewParams, $viewTemplate);
		}
		public function duzenle(){
			$kategoriId = $this->params+0;

			if ($kategoriId == 0) {
				Header("Location: " . URL);
			}else{
				$this->loadModel("admin","kategori");
				$kategoriAd = $this->model->takeLine($kategoriId)->ad;
				$viewParams = array('kategoriId' => $kategoriId, 'kategoriAd' => $kategoriAd);
				$this->loadView("admin","kategori", $viewParams, "kategoriduzenle");
			}
		}

		public function duzenlendi(){
			$categoryId = $_POST['kid'];
			$categoryName = $_POST['ad'];
			$this->loadModel("admin","kategori");

			if (!empty($categoryId) && !empty($categoryName)) {
				$viewParams = array('duzenlendiDurum' => $this->model->updateQuery($categoryId, $categoryName));
			}else{
				$viewParams = array('duzenlendiDurum' => false);
			}

			$this->loadView("admin","kategori", $viewParams, "kategoriduzenlendi");
		}
	}
?>

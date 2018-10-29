<?php
	class Urunbeden extends Controller{
		public function index(){

			if(!empty($this->params)){
				$this->loadModel("admin","urunbeden");
				@$viewParams->list = $this->model->getList($this->params);
				$viewParams->rowCount = count($this->model->getList($this->params));
				$viewParams->urunId = $this->params;
				$this->loadView("admin","urunbeden", $viewParams, "urunbedenliste");
			}else{
				Header("Location" . URL);
			}
		}

		public function ekle(){
			if (!empty($this->params)) {
				$this->loadView("admin","urunbeden", array('id' => $this->params),"urunbedenekle");
			}else{
				Header("Location:" . URL);
			}
		}

		public function eklendi(){
			$this->loadModel("admin","urunbeden");

			if (empty($this->params) || empty($_POST['beden']) || empty($_POST['stok'])) {
				$viewParams = array('eklendiDurum' => false);
			}else{
				$viewParams = array('eklendiDurum' => $this->model->insertQuery($this->params, $_POST['beden'], $_POST['stok']));
			}

			$this->loadView("admin","urunbeden", $viewParams, "urunbedeneklendi");
		}

		public function duzenle(){
			if (empty($this->params)) {
				Header("Location:" . URL);
			}else{
				$this->loadModel("admin","urunbeden");
				$viewParams = $this->model->takeLine($this->params);
				$this->loadView("admin","urunbeden", $viewParams, "urunbedenduzenle");
			}
		}

		public function duzenlendi(){
			$this->loadModel("admin","urunbeden");

			if (empty($_POST['ubid']) || empty($_POST['beden']) || empty($_POST['stok'])) {
				$viewParams = array('duzenlendiDurum' => false);
			}else{
				$viewParams = array('duzenlendiDurum' => $this->model->updateQuery($_POST['ubid'], $_POST['beden'], $_POST['stok']));
			}

			$this->loadView("admin","urunbeden", $viewParams, "urunbedenduzenlendi");
		}

		public function sil(){
			$this->loadModel("admin","urunbeden");
			if (empty($this->params)) {
				$viewParams = array('silindiDurum' => false);
			}else{
				$viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
			}

			$this->loadView("admin","urunbeden", $viewParams, "urunbedensilindi");
		}
	}
?>

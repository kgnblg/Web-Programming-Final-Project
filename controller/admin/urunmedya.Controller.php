<?php
	class Urunmedya extends Controller{
		public function index(){
			if(!empty($this->params)){
				$this->loadModel("admin/","urunmedya");
				@$viewParams->list = $this->model->getList($this->params);
				$viewParams->rowCount = count($this->model->getList($this->params));
				$viewParams->urunId = $this->params;
				$this->loadView("admin/","urunmedya", $viewParams, "urunmedyaliste");
			}else{
				Header("Location" . URL);
			}
		}

		public function ekle(){
			if (!empty($this->params)) {
				$this->loadView("admin/","urunmedya", array('id' => $this->params),"urunmedyaekle");
			}else{
				Header("Location" . URL);
			}
		}

		public function eklendi(){
			if (isset($_FILES['dos'])) {
				$this->loadModel("admin/","urunmedya");
				$isim = $_FILES['dos']['name'];
				$uzanti = explode('.',$isim);
				$uzanti = $uzanti[count($uzanti)-1];
				if ($uzanti == "jpg" OR $uzanti == "png" OR $uzanti == "gif") {
					$dosyaadi = $this->dosyaAdiOlustur().".".$uzanti;
					if (copy($_FILES['dos']['tmp_name'], UPLOAD_PATH . $dosyaadi)) {
						$viewParams = array('eklendiDurum' => $this->model->insertQuery($_POST['urunId'], $dosyaadi));
					}else{
						$viewParams = array('eklendiDurum' => false);
					}
				}else{
					$viewParams = array('eklendiDurum' => false);
				}
			}else{
				$viewParams = array('eklendiDurum' => false);
			}

			$this->loadView("admin/","urunmedya", $viewParams, "urunmedyaeklendi");
		}

		private function dosyaAdiOlustur(){
			$zaman = date('d m Y H i s');
			$zaman = sha1(md5($zaman));
			return substr($zaman, 0, 15);
		}

		public function sil(){
			if (!empty($this->params)) {
				$this->loadModel("admin/","urunmedya");
				$getRow = $this->model->takeLine($this->params);
				if (unlink(UPLOAD_PATH . $getRow->resimurl)) {
					$viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
				}else{
					$viewParams = array('silindiDurum' => false);
				}

				$this->loadView("admin/","urunmedya", $viewParams, "urunmedyasilindi");
			}else{
				Header("Location:" . URL);
			}
		}
	}
?>

<?php
  class Musteri extends Controller{
    public function index(){
      $this->loadModel("admin","musteri");
      $viewParams = $this->model->getList();
      $this->loadView("admin","musteri", $viewParams, "musteriliste");
    }

    public function sil(){
      if (!empty($this->params)) {
        $this->loadModel("admin","musteri");
        $viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
        $this->loadView("admin","musteri", $viewParams, "musterisilindi");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

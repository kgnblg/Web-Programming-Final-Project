<?php
  class Sayfa extends Controller{
    public function index(){
      $this->loadView("admin","sayfa",null,"siteyonetim");
    }

    public function ekle(){
      $this->loadView("admin","sayfa", null, "sayfaekle");
    }

    public function eklendi(){
      if (!empty($_POST['ad']) && !empty($_POST['ic'])) {
        $this->loadModel("admin","sayfa");
        $viewParams = array('eklendiDurum' => $this->model->insertQuery($_POST['ad'], $_POST['ic']));
        $this->loadView("admin","sayfa",$viewParams,"sayfaeklendi");
      }else{
        Header("Location:" . URL);
      }
    }

    public function duzenle(){
      if (!empty($this->params)) {
        $this->loadModel("admin","sayfa");
        $viewParams = $this->model->takeLine($this->params);
        $this->loadView("admin","sayfa",$viewParams,"sayfaduzenle");
      }else{
        Header("Location:" . URL);
      }
    }

    public function duzenlendi(){
      if (!empty($_POST['ad']) && !empty($_POST['ic'])) {
        $this->loadModel("admin","sayfa");
        $viewParams = array('duzenlendiDurum' => $this->model->updateQuery($_POST['sid'], $_POST['ad'], $_POST['ic']));
      }else{
        $viewParams = array('duzenlendiDurum' => false);
      }

      $this->loadView("admin","sayfa",$viewParams,"sayfaduzenlendi");
    }

    public function sil(){
      if (!empty($this->params)) {
        $this->loadModel("admin","sayfa");
        $viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
      }else{
        $viewParams = array('silindiDurum' => false);
      }

      $this->loadView("admin","sayfa",$viewParams,"sayfasilindi");
    }

    public function liste(){
      $this->loadModel("admin","sayfa");
      $viewParams = $this->model->getList();
      $this->loadView("admin","kategori", $viewParams, "sayfaliste");
    }

    public function detay(){
      if (!empty($this->params)) {
        $this->loadModel("admin","sayfa");
        $viewParams = $this->model->takeLine($this->params);
        $this->loadView("admin","sayfa", $viewParams, "sayfadetay");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

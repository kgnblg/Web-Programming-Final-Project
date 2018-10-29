<?php
  class Adres extends Controller{
    public function index(){
      Header("Location:" . URL);
    }

    public function ekle(){
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $this->loadModel("musteri","adres");
      if (!empty($_POST['baslik']) && !empty($_POST['adres'])) {
        $viewParams = array('eklendiDurum' => $this->model->insertQuery($_SESSION['userId'], $_POST['baslik'], $_POST['adres']),
        'sayfa' => $sayfaList, 'kategori' => $kategoriList);
      }else{
        $viewParams = array('eklendiDurum' => false, 'sayfa' => $sayfaList, 'kategori' => $kategoriList);
      }

      $this->loadView("musteri","adres",$viewParams,"adreseklendi");
    }

    public function sil(){
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      if (!empty($this->params)) {
        $this->loadModel("musteri","adres");
        $viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params), 'sayfa' => $sayfaList, 'kategori' => $kategoriList);
      }else{
        $viewParams = array('silindiDurum' => false, 'sayfa' => $sayfaList, 'kategori' => $kategoriList);
      }

      $this->loadView("musteri","adres",$viewParams,"adressilindi");
    }
  }
?>

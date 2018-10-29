<?php
  class Yorum extends Controller{
    public function ekle(){
      if (!empty($_POST['yorum']) && !empty($_POST['urunid'])) {
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("musteri","yorum");
        $viewParams = array('eklendiDurum' => $this->model->insertQuery($_POST['urunid'], $_POST['yorum']), 'sayfa' => $sayfaList,
        'kategori' => $kategoriList);
        $this->loadView("musteri","yorum",$viewParams,"yorumeklendi");
      }
    }

    public function puanver(){
      if (!empty($_POST['puan']) && !empty($_POST['urunid'])) {
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("musteri","yorum");
        $viewParams = array('eklendiDurum' => $this->model->insertPointsQuery($_POST['urunid'], $_POST['puan']),'sayfa' => $sayfaList,
        'kategori' => $kategoriList);
        $this->loadView("musteri","yorum",$viewParams,"puaneklendi");
      }
    }

    public function index(){
      Header("Location:" . URL);
    }
  }
?>

<?php
  class Ara extends Controller{
    public function index(){
      if (!empty($_POST['ara'])) {
        $this->loadModel("index","ara");
        $sonuc = $this->model->searchQuery($_POST['ara']);
        $cikti = array();
        $this->loadModel("index","urunmedya");
        foreach ($sonuc as $urun) {
          $urun->resim = $this->model->takeLineByUrunId($urun->id);
          $cikti[] = $urun;
        }

        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $viewParams = array('sayfa' => $sayfaList, 'kategori' => $kategoriList, 'sonuc' => $cikti);
        $this->loadView("index","ara",$viewParams,"aramasonuc");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

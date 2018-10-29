<?php
  class Home extends Controller{
    public function index(){
      $this->loadModel("index","sayac");
      $this->model->updateQuery();
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $this->loadModel("index","urun");
      $sonurunler = $this->model->last10Rows();
      $urunler = array();
      $this->loadModel("index","urunmedya");
      foreach ($sonurunler as $urun) {
        $urun->resim = $this->model->getList($urun->id)[0];
        $urunler[] = $urun;
      }
      $viewParams = array('kategori' => $kategoriList,
      'sayfa' => $sayfaList, 'urunler' => $urunler);
      $this->loadView("index","home",$viewParams,"index");
    }

    public function sayfa(){
      if (!empty($this->params)) {
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $sayfaicerik = $this->model->takeLine($this->params);
        $viewParams = array('kategori' => $kategoriList,
        'sayfa' => $sayfaList, 'sayfaicerik' => $sayfaicerik);
        $this->loadView("index","home",$viewParams,"sayfaicerik");
      }else{
        Header("Location:" . URL);
      }
    }

    public function kategori(){
      if (!empty($this->params)) {
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("index","kategori");
        $secilenKategori = $this->model->takeLine($this->params)->ad;
        $this->loadModel("index","urun");
        $urunler = $this->model->getListByCategory($this->params);
        $sayfaicerik = array();
        $this->loadModel("index","urunmedya");
        foreach ($urunler as $urun) {
          $urun->resim = $this->model->getList($urun->id)[0];
          $sayfaicerik[] = $urun;
        }
        $viewParams = array('sayfa' => $sayfaList, 'sayfaicerik' => $sayfaicerik, 'secilenKategori' => $secilenKategori);
        $this->loadView("index","home",$viewParams,"urunliste");
      }else{
        Header("Location:" . URL);
      }
    }

    public function detay(){
      if (!empty($this->params)) {
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("index","urun");
        $urun = $this->model->takeLine($this->params);
        $this->loadModel("index","urunmedya");
        $urunmedya = $this->model->getList($urun->id);
        $this->loadModel("index","urunbeden");
        $urunbeden = $this->model->getList($urun->id);
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $this->loadModel("musteri","yorum");
        $urunPuan = $this->model->getPoints($this->params)->toplam;
        $urunYorum = $this->model->getYorumList($this->params);
        $viewParams = array('sayfa' => $sayfaList, 'urun' => $urun, 'urunmedya' => $urunmedya,
        'urunbeden' => $urunbeden, 'kategori' => $kategoriList, 'puan' => $urunPuan, 'yorum' => $urunYorum);
        $this->loadView("index","home",$viewParams,"urundetay");
      }else{
        Header("Location:" . URL);
      }
    }

    public function iletisim(){
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $viewParams = array('kategori' => $kategoriList,
      'sayfa' => $sayfaList);
      $this->loadView("index","home",$viewParams,"iletisim");
    }

    public function iletildi(){
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      if (!empty($_POST['ad']) && !empty($_POST['mail']) && !empty($_POST['mesaj'])) {
        $this->loadModel("index","contact");
        $viewParams = array('kategori' => $kategoriList,
        'sayfa' => $sayfaList, 'iletildiDurum' => $this->model->insertQuery($_POST['ad'], $_POST['mail'], $_POST['mesaj']));
        $this->loadView("index","home",$viewParams,"iletisim");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

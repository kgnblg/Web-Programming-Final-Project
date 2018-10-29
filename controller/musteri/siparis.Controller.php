<?php
  class Siparis extends Controller{
    public function index(){
      $this->loadModel("musteri","siparis");
      $siparisler = $this->model->getList($_SESSION['userId']);
      $sipwithUrun = array();
      $sipwithAll = array();
      $this->loadModel("index","urun");
      foreach ($siparisler as $siparis) {
        $urun = $this->model->takeLine($siparis->urunid);
        $siparis->urunad = $urun->ad;
        $siparis->urunfiyat = $urun->fiyat;
        $sipwithUrun[] = $siparis;
      }

      $this->loadModel("index","urunmedya");
      foreach ($sipwithUrun as $siparis) {
        $urunmedya = $this->model->takeLineByUrunId($siparis->urunid);
        $siparis->urunresim = $urunmedya->resimurl;
        $sipwithAll[] = $siparis;
      }
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $this->loadModel("musteri","adres");
      $adresListe = $this->model->getList($_SESSION['userId']);
      $viewParams = array('siparisListe' => $sipwithAll, 'sayfa' => $sayfaList, 'adresler' => $adresListe);
      $this->loadView("musteri","siparis",$viewParams,"sepetim");
    }

    public function sepeteekle(){
      if (!empty($_POST['beden']) && !empty($_POST['adet']) && !empty($_POST['urunid'])) {
        $this->loadModel("musteri","siparis");
        $this->model->insertQuery($_SESSION['userId'], $_POST['urunid'], $_POST['beden'], $_POST['adet'], $_POST['adet']*$_POST['urunfiyat']);
        Header("Location:" . URL ."/musteri/siparis");
      }else{
        Header("Location:" . URL);
      }
    }

    public function sil(){
      if (!empty($this->params)) {
        $this->loadModel("musteri","siparis");
        $this->model->deleteQuery($this->params);
        Header("Location:" . URL);
      }else{
        Header("Location:" . URL);
      }
    }

    public function ode(){
      if (!empty($_POST['odeme'])) {
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $this->loadModel("musteri","siparis");
        $sipdb = $this->model;
        $siparisler = $this->model->getList($_SESSION['userId']);
        $detay = "DETAYLAR<br>";

        $toplamtutar = 0;
        $this->loadModel("index","urun");
        foreach ($siparisler as $siparis) {
          $urun = $this->model->takeLine($siparis->urunid);
          $detay = $detay . "$urun->id $urun->ad Beden: $siparis->beden Adet: $siparis->adet Toplam Tutar: $siparis->toplamucret <br>";
          $toplamtutar += $siparis->toplamucret;
          $sipdb->deleteQuery($siparis->id);
        }
        $viewParams = array('tamamlandiDurum' => $sipdb->insertCompletedCart($_SESSION['userId'], $detay, $toplamtutar, $_POST['adres']),
        'siparisId' => $sipdb->db->insert_id, 'sayfa' => $sayfaList);
      }else{
        $viewParams = array('tamamlandiDurum' => false, 'sayfa' => $sayfaList);
      }

      $this->loadView("musteri","siparis",$viewParams,"siparisodendi");
    }

    public function gecmis(){
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $this->loadModel("musteri","siparis");
      $viewParams = array('gecmisSiparis' => $this->model->getCompletedCartList($_SESSION['userId']), 'sayfa' => $sayfaList);
      $this->loadView("musteri","siparis",$viewParams,"siparisgecmis");
    }
  }
?>

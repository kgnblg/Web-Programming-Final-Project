<?php
  class Siparis extends Controller{
    public function index(){
      $this->loadModel("admin","siparis");
      $viewParams = array('siparis' => $this->model->getList());
      $this->loadView("admin","siparis",$viewParams,"siparisliste");
    }

    public function sil(){
      if (!empty($this->params)) {
        $this->loadModel("admin","siparis");
        $viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
        $this->loadView("admin","siparis",$viewParams,"siparissilindi");
      }else{
        Header("Location:" . URL);
      }
    }

    public function durumguncelle(){
      if (!empty($this->params)) {
        $viewParams = array('siparisid' => $this->params);
        $this->loadView("admin","siparis",$viewParams,"siparisdurum");
      }else{
        Header("Location:" . URL);
      }
    }

    public function durumguncellendi(){
      if (!empty($_POST['durum'])) {
        $this->loadModel("admin","siparis");
        if (!empty($_POST['kargono'])) {
          $icerik = $_POST['durum']. ' Kargo No: '.$_POST['kargono'];
        }else{
          $icerik = $_POST['durum'];
        }
        $viewParams = array('guncellendiDurum' => $this->model->updateQuery($_POST['sipid'], $icerik));
      }else{
        $viewParams = array('guncellendiDurum' => false);
      }

      $this->loadView("admin","siparis",$viewParams,"siparisdurum");
    }

    public function detay(){
      if (!empty($this->params)) {
        $this->loadModel("admin","siparis");
        $siparis = $this->model->takeLine($this->params);
        $this->loadModel("admin","musteri");
        $musteri = $this->model->takeLine($siparis->mid);
        $this->loadModel("admin","musteriadres");
        $adres = $this->model->takeLine($siparis->adres);
        $viewParams = array('siparis' => $siparis, 'musteri' => $musteri, 'adres' => $adres);
        $this->loadView("admin","siparis",$viewParams,"siparisdetay");
      }
    }
  }
?>

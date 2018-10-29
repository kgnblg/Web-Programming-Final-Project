<?php
  class Contact extends Controller{
    public function index(){
      $this->loadModel("admin","contact");
      $viewParams = array('iletisim' => $this->model->getList());
      $this->loadView("admin","contact",$viewParams,"iletisimliste");
    }

    public function sil(){
      if (!empty($this->params)) {
        $this->loadModel("admin","contact");
        $viewParams = array('silindiDurum' => $this->model->deleteQuery($this->params));
      }else{
        $viewParams = array('silindiDurum' => false);
      }

      $this->loadView("admin","contact",$viewParams,"iletisimsilindi");
    }

    public function detay(){
      if (!empty($this->params)) {
        $this->loadModel("admin","contact");
        $viewParams = $this->model->takeLine($this->params);
        $this->loadView("admin","contact",$viewParams,"iletisimdetay");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

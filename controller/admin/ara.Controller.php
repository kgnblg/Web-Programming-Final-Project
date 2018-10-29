<?php
  class Ara extends Controller{
    public function index(){
      if (!empty($_POST['ara']) && !empty($_POST['alan'])) {
        $this->loadModel("admin","ara");
        $viewParams = array('sonuc' => $this->model->searchQuery($_POST['ara'], $_POST['alan']), 'alan' => $_POST['alan']);
        $this->loadView("admin","ara",$viewParams,"aramasonuc");
      }else{
        Header("Location:" . URL);
      }
    }
  }
?>

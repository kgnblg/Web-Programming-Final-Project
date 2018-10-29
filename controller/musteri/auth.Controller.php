<?php
  class Auth extends Controller{
    public function index(){
      Header("Location:" . LOGIN_USER_URL);
    }

    public static function controlUserSessions(){
      if (!isset($_SESSION['userToken'])) {
        Header("Location:" . LOGIN_USER_URL);
        exit;
      }
    }

    public function login(){
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $viewParams = array('kategori' => $kategoriList,
      'sayfa' => $sayfaList);
      $this->loadView("musteri", "auth", $viewParams, "giris");
    }

    public function logincontrol(){
      $mail = $_POST['mail'];
      $pass = md5($_POST['pass']);

      $this->loadModel("musteri","authuser");
      $sorgu = $this->model->takeLine($mail, $pass);
      if (count($sorgu) == 1) {
        print_r($sorgu);
        $_SESSION['userToken'] = sha1($mail);
        $_SESSION['userId'] = $sorgu->id;
        Header("Location:" . URL);
      }else{
        Header("Location:" . URL . "/musteri/auth/login");
      }
    }

    public function logout(){
      session_destroy();
      Header("Location:" . URL);
    }

    public function register(){
      if (!empty($_POST['ad']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
        $this->loadModel("musteri","authuser");
        $ekleSorgu = $this->model->insertQuery($_POST['ad'], $_POST['mail'], md5($_POST['pass']));
        $this->loadModel("index","kategori");
        $kategoriList = $this->model->getList();
        $this->loadModel("index","sayfa");
        $sayfaList = $this->model->getList();
        $viewParams = array('eklendiDurum'=> $ekleSorgu,
        'kategori' => $kategoriList,
        'sayfa' => $sayfaList);
        $this->loadView("musteri","auth",$viewParams,"giris");
      }else{
        Header("Location:" . URL);
      }
    }

    public function hesabim(){
      Auth::controlUserSessions();
      $this->loadModel("musteri","authuser");
      $bilgiler = $this->model->takeLineById($_SESSION['userId']);
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      $this->loadModel("musteri","adres");
      $adresList = $this->model->getList($_SESSION['userId']);
      $viewParams = array('bilgiler' => $bilgiler,
      'kategori' => $kategoriList,
      'sayfa' => $sayfaList,
      'adresList' => $adresList);

      $this->loadView("musteri","auth",$viewParams,"hesabim");
    }

    public function bilgiguncelle(){
      Auth::controlUserSessions();
      $this->loadModel("index","kategori");
      $kategoriList = $this->model->getList();
      $this->loadModel("index","sayfa");
      $sayfaList = $this->model->getList();
      if (empty($_POST['ypass1']) && empty($_POST['ypass2'])) {
        if (!empty($_POST['pass']) && !empty($_POST['ad']) && !empty($_POST['mail'])) {
          $this->loadModel("musteri","authuser");
          $bilgiler = $this->model->takeLineById($_SESSION['userId']);
          if ($bilgiler->pass == md5($_POST['pass'])) {
            $guncellendiDurum = $this->model->updateQuery($_SESSION['userId'], $_POST['ad'], $_POST['mail'], null);
            echo $bilgiler->pass;
            $_SESSION['userToken'] = sha1($_POST['mail']);
          }else{
            $guncellendiDurum = false;
          }
        }else{
          $guncellendiDurum = false;
        }
      }else{
        if ($_POST['ypass1'] == $_POST['ypass2']) {
          if (!empty($_POST['pass']) && !empty($_POST['ad']) && !empty($_POST['mail'])) {
            $this->loadModel("musteri","authuser");
            $bilgiler = $this->model->takeLineById($_SESSION['userId']);
            if ($bilgiler->pass == md5($_POST['pass'])) {
              $guncellendiDurum = $this->model->updateQuery($_SESSION['userId'], $_POST['ad'], $_POST['mail'], $_POST['ypass1']);
              $_SESSION['userToken'] = sha1($_POST['mail']);
            }else{
              $guncellendiDurum = false;
            }
          }else{
            $guncellendiDurum = false;
          }
        }else{
          $guncellendiDurum = false;
        }
      }

      $viewParams = array('guncellendiDurum' => $guncellendiDurum,
      'kategori' => $kategoriList,
      'sayfa' => $sayfaList);

      $this->loadView("musteri","auth",$viewParams,"guncellendi");
    }
  }
?>

<?php
  class Auth extends Controller{
    public function index(){
      Header("Location:" . LOGIN_ADMIN_URL);
    }

    public static function controlAdminSessions(){
      if (!isset($_SESSION['adminToken']) && $_SESSION['adminToken'] != "21232f297a57a5a743894a0e4a801fc3") {
        Header("Location:" . LOGIN_ADMIN_URL);
        exit;
      }
    }

    public function login(){
      $this->loadView("admin", "auth", null, "giris");
    }

    public function logincontrol(){
      $nick = $_POST['nick'];
      $pass = md5($_POST['pass']);

      $this->loadModel("admin","auth");
      if ($this->model->takeLine($nick, $pass) == 1) {
        $_SESSION['adminToken'] = "21232f297a57a5a743894a0e4a801fc3";
        Header("Location:" . URL . "/admin");
      }else{
        Header("Location:" . URL . "/admin/auth/login");
      }
    }

    public function logout(){
      session_destroy();
      Header("Location:" . URL . "/admin");
    }
  }
?>

<?php
	class Home extends Controller{
		public function index(){
			$this->loadModel("admin","sayac");
			$viewParams = array('sayac' => $this->model->getDates());
			$this->loadView("admin","home",$viewParams,"panelindex");
		}
	}
?>

<?php
	class View{
		public $template;
		public $params = array();

		function __construct($pathName = null, $template, $params = null){
			if ($pathName == null) {
				$this->template = $template . ".Template.php";
			}else{
				$this->template = $pathName . DS . $template . ".Template.php";
			}
			$this->params = $params;
			$this->show();
		}
	}
?>

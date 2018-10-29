<?php
class Controller{
	public $view;
	public $model;
	protected $params;
	public $output;

	public function __construct($params = null){
		$this->params = $params;
		$this->output = array();
	}

	public function loadModel($pathName = null, $modelName){
		if ($pathName == null) {
			require MODEL_PATH . $modelName . ".Model.php";
		}else{
			require MODEL_PATH . $pathName . DS . $modelName . ".Model.php";
		}
		$className = ucfirst($modelName)."Model";
		$createInstance = new $className();
		$createInstance->openConnection();
		$this->model = $createInstance;
	}

	public function loadView($pathName = null, $viewName, $viewParams = null, $viewTemplate){
		if ($pathName == null) {
			require VIEW_PATH . $viewName . ".View.php";
		}else{
			require VIEW_PATH . $pathName . DS . $viewName . ".View.php";
		}

		$className = ucfirst($viewName)."View";
		$createInstance = new $className($pathName, $viewTemplate, $viewParams);
		$this->view = $createInstance;
	}

	public function errorHandler(){
		throw new \Exception("Controller Error");
	}
}
?>

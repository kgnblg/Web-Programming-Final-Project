<?php
class Application{

	private $request;

	public function start(){
		$this->request = @$_GET['url'];
		$this->loadCore();
		$this->handleRequest();
	}

	public function loadCore(){
		require CORE_PATH . "controller.php";
		require CONFIG_PATH;
		require CORE_PATH . "model.php";
		require CORE_PATH . "view.php";
	}

	public function loader($controllerName, $pathName){
		if (is_dir(CONTROLLER_PATH . $pathName) && file_exists(CONTROLLER_PATH . $pathName . DS . $controllerName . ".Controller.php")){
			require CONTROLLER_PATH . $pathName . DS . $controllerName . ".Controller.php";
		}
	}

	public function handleRequest(){

		if (!isset($this->request)) {
			$calledPath = "index";
			$calledController = "Home";
			$calledAction = "index";
			$calledParameters = "";
		}else{
			$explodeRequest = explode('/', $this->request);
			$calledPath = $this->checkPath($explodeRequest[0]);
			$calledController = (!empty($explodeRequest[1])) ? $this->checkController($explodeRequest[1], $calledPath) : "Home";
			$calledAction = (!empty($explodeRequest[2])) ? $explodeRequest[2] : "index";
			$calledParameters = (!empty($explodeRequest[3])) ? $explodeRequest[3] : "";
		}

		$this->sessionHandler($calledController, $calledPath);
		$this->loader($calledController, $calledPath);
		$calledAction = $this->checkAction($calledController, $calledAction);
		$createInstance = new $calledController($calledParameters);
		$createInstance->$calledAction();
	}

	private function checkController($fileName, $pathName){
		$fullName = $fileName . ".Controller.php";
		return is_file(CONTROLLER_PATH . $pathName . DS . $fullName) ? $fileName : "Home";
	}

	private function checkPath($pathName){
		return is_dir(CONTROLLER_PATH . $pathName) ? $pathName : "index";
	}

	private function checkAction($class, $action){
		$class = ucfirst($class);
		return method_exists($class, $action) ? $action : "index";
	}

	private function sessionHandler($calledController, $calledPath){
		if ($calledPath == "admin" && $calledController != "auth") {
			$this->loader("auth", "admin");
			Auth::controlAdminSessions();
		}else if ($calledPath == "musteri" && $calledController != "auth") {
			$this->loader("auth", "musteri");
			Auth::controlUserSessions();
		}
	}
}
?>

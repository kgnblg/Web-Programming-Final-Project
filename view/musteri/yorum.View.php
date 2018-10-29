<?php
	class YorumView extends View{
		public function show(){
			require TEMPLATE_PATH . $this->template;
		}
	}
?>

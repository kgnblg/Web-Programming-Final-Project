<?php
	class SayfaView extends View{
		public function show(){
			require TEMPLATE_PATH . $this->template;
		}
	}
?>

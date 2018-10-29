<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
					<div align="center">
						<?php
							if ($this->params['silindiDurum'])
								echo '<img src="'.ADMIN_TEMPLATE.'img/ok.png" /><br /><h2><strong>Ürün Başarıyla Silindi.</strong></h2>';
							else
								echo '<img src="'.ADMIN_TEMPLATE.'img/er.png" /><br /><h2><strong>Ürün Silinemedi.</strong></h2>';
						?>
					</div>
				</div></div>
<?php require 'footer.php'; ?>

<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Kategori</h3>
				</div>
				<div class="block_cont">
							<div align="center">
							<?php
							if ($this->params['duzenlendiDurum'])
								echo '<img src="'.ADMIN_TEMPLATE.'img/ok.png" /><br /><h2><strong>Ürün Başarıyla Düzenlendi.</strong></h2>';
							else
								echo '<img src="'.ADMIN_TEMPLATE.'img/er.png" /><br /><h2><strong>Ürün Düzenlenemedi.</strong></h2>';
							?>
							</div>
				</div>
			</div><!-- Block End -->
<?php require 'footer.php'; ?>

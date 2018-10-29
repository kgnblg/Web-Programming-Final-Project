<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
				<div align="center">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/urunbeden/eklendi/<?php echo $this->params['id']; ?>">
							<div class="form_row"><label>Beden:</label><input class="input" name="beden" /></div>
							<div class="form_row"><label>Stok:</label><input class="input" name="stok" /></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Ekle" /></div>
							</form></div>
						</div></div>
<?php require 'footer.php'; ?>

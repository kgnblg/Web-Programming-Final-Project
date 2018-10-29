<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Kategoriler</h3>
				</div>
				<div class="block_cont">
							<div align="center">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/kategori/duzenlendi">
							<input type="hidden" name="kid" value="<?php echo $this->params['kategoriId']; ?>"/>
							<div class="form_row"><label>Kategori Adı:</label><input class="input" name="ad" value="<?php echo $this->params['kategoriAd']; ?>"/></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Düzenle" /></div>
							</form></div>
				</div>
			</div><!-- Block End -->
<?php require 'footer.php'; ?>

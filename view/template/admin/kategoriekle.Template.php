<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Kategoriler</h3>
				</div>
				<div class="block_cont">
							<div align="center">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/kategori/ekle">
							<div class="form_row"><label>Kategori Adı:</label><input class="input" name="ad" /></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Oluştur" /></div>
							</form></div>
				</div>
			</div><!-- Block End -->
<?php require 'footer.php'; ?>

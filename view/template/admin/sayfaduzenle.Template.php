<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Sayfalar</h3>
				</div>
				<div class="block_cont">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/duzenlendi">
              <input type="hidden" value="<?php echo $this->params->id; ?>" name="sid" />
							<div class="form_row"><label>Başlık:</label><input style="width: 290px;" class="input" name="ad" value="<?php echo $this->params->baslik; ?>"/></div>
							<div class="form_row"><label>İçerik:</label><textarea name="ic" id="htmleditor"><?php echo $this->params->icerik; ?></textarea></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Düzenle" /></div>
							</form></div></div>
<?php require 'footer.php'; ?>

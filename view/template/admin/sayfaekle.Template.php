<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Sayfalar</h3>
				</div>
				<div class="block_cont">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/eklendi">
							<div class="form_row"><label>Başlık:</label><input style="width: 290px;" class="input" name="ad" /></div>
							<div class="form_row"><label>İçerik:</label><textarea name="ic" id="htmleditor"></textarea></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Oluştur" /></div>
							</form></div></div>
<?php require 'footer.php'; ?>

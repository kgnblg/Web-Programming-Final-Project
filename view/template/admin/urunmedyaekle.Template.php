<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
							<form enctype="multipart/form-data" class="form" method="post" action="<?php echo URL; ?>/admin/urunmedya/eklendi">
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                <input type="hidden" name="urunId" value="<?php echo $this->params['id']; ?>" />
    						<div class="form_row"><label>Dosya (jpg, png, gif):</label><input style="width: 290px;" class="input" name="dos" type="file" /></div>
    						<div class="clear"></div><br />
    						<div class="form_row"><input type="submit" class="submit" value="Ekle" /></div>
							</form></div></div>
<?php require 'footer.php'; ?>

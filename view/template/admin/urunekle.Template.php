<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/urun/ekle">
							<div class="form_row"><label>Ürün Adı:</label><input style="width: 290px;" class="input" name="ad" /></div>
							<div class="form_row"><label>Fiyat:</label><input style="width: 290px;" class="input" name="fiyat" placeholder="00.00" /></div>
							<div class="form_row">
							<label>Kategori:</label>
							<select name="kat" class="select" style="width: 300px;">
							<?php
							foreach ($this->params['kategoriler'] as $kategori) {
								echo '<option value="'.$kategori->id.'">'.$kategori->ad.'</option>';
							}
							?>
							</select>
							</div>
							<div class="form_row"><label>Açıklama:</label><textarea name="ack" id="htmleditor"></textarea></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Oluştur" /></div>
							</form></div></div>
<?php require 'footer.php'; ?>

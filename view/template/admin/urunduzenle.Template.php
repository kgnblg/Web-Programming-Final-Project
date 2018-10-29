<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
							<form class="form" method="post" action="<?php echo URL; ?>/admin/urun/duzenlendi">
							<input type="hidden" name="uid" value="<?php echo $this->params['id']; ?>" />
							<div class="form_row"><label>Ürün Adı:</label><input style="width: 290px;" class="input" name="ad" value="<?php echo $this->params['ad']; ?>"/></div>
							<div class="form_row"><label>Fiyat:</label><input style="width: 290px;" class="input" name="fiyat" value="<?php echo $this->params['fiyat']; ?>" placeholder="00.00" /></div>
							<div class="form_row">
							<label>Kategori:</label>
							<select name="kat" class="select" style="width: 300px;">
								<option value="<?php echo $this->params['currentKategori']['id']; ?>">*** <?php echo $this->params['currentKategori']['ad']; ?></option>
							<?php
							foreach ($this->params['kategoriListe'] as $kategori) {
								echo '<option value="'.$kategori['id'].'">'.$kategori['ad'].'</option>';
							}
							?>
							</select>
							</div>
							<div class="form_row"><label>Açıklama:</label><textarea name="ack" id="htmleditor"><?php echo $this->params['aciklama']; ?></textarea></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Oluştur" /></div>
							</form></div></div>
<?php require 'footer.php'; ?>

<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
					<h3>Ürün Detayı:</h3><br /><p>
					<b>Ürün Puanı:</b> <?php echo floor($this->params->puan); ?> / 10<br />
					<b>Ürün ID:</b> <?php echo $this->params->id; ?><br />
					<b>Ürün Adı:</b> <?php echo $this->params->ad; ?><br />
					<b>Fiyat:</b> <?php echo $this->params->fiyat; ?> TL<br />
					<b>Kategori:</b> <?php echo $this->params->kategoriadi; ?><br />
					<b>Tarih:</b> <?php echo $this->params->tarih; ?><br />
					<b>Açıklama:</b> <?php echo $this->params->aciklama; ?><br /><br /></p>
				<h2>Ürün Yorumları:</h2><br /><p>
				<?php
					if (empty($this->params->yorumlar)) {
						echo '<center>Bu ürünle ilgili yorum bulunamadı.</center><br />';
					}else{
						foreach ($this->params->yorumlar as $yorum) {
							echo '<b>Yorum ID:</b> '.$yorum->id.' <a href="'.URL.'/admin/urun/yorumsil/'.$yorum->id.'">[YORUMU SİL]</a><br /><b>Yorum İçeriği: </b> <br /> '.$yorum->yorum.'<br /><hr>';
						}
					}
				 ?></p>
				</div></div>
<?php require 'footer.php'; ?>

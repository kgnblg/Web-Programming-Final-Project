<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
							<?php
							echo '<div align="center" style="margin-bottom: 5px;"><a href="'.URL.'/admin/urunmedya/ekle/'.$this->params->urunId.'">Medya Ekle</a></div>';
							if ($this->params->rowCount == 0) {
								echo '<div align="center"><h2>Medya Bulunamadı.</h2></div>';
							}else{
								echo '<div class="gallery"><!-- Gallery Begin -->';
								foreach ($this->params->list as $medya) {
									echo '<div class="gallery_item"><img src="'.URL.'/uimg/'.$medya->resimurl.'" width="200" height="150" alt=""/><div class="actionbar"><a href="'.URL.'/uimg/'.$medya->resimurl.'" class="action view fancy"><span>Bak</span></a><a href="'.URL.'/admin/urunmedya/sil/'.$medya->id.'" class="action delete"><span>Sİl</span></a></div></div>';
								}
								echo '</div><!-- Gallery End -->';
							}
							?>
						</div></div>
<?php require 'footer.php'; ?>

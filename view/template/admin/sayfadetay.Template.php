<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Sayfalar</h3>
				</div>
				<div class="block_cont">
					<h3>Sayfa Detayı:</h3><br /><p>
					<b>Sayfa ID:</b> <?php echo $this->params->id; ?><br />
					<b>Sayfa Başlığı:</b> <?php echo $this->params->baslik; ?><br />
					<b>İçerik:</b><br /> <?php echo $this->params->icerik; ?><br /></p>
				</div></div>
<?php require 'footer.php'; ?>

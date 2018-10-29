<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>İletişim</h3>
				</div>
				<div class="block_cont">
					<p>
					<b>ID:</b> <?php echo $this->params->id; ?><br />
					<b>Ad Soyad:</b> <?php echo $this->params->ad; ?><br />
					<b>Mail:</b> <?php echo $this->params->mail; ?><br />
					<b>Mesaj:</b><br /> <?php echo $this->params->mesaj; ?><br /></p>
				</div></div>
<?php require 'footer.php'; ?>

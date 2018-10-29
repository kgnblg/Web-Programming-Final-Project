<?php require '/../index/header.php'; ?>
<div class="row">
		<?php require '/../index/sidebar.php'; ?>
    <div class="span9">
	<h3> İletişim</h3>
<div class="well">
	<form class="form-horizontal" method="post" action="<?php echo URL; ?>/index/home/iletildi"><br>
		<?php
			if (isset($this->params['iletildiDurum'])) {
				if ($this->params['iletildiDurum']) {
					echo '<b>Mesajınız Başarılı Bir Şekilde Alınmıştır. En Kısa Sürede Dönüş Yapılacaktır.</b><br />';
				}else{
					echo '<b>Mesajınız Alınamadı.</b><br />';
				}
				echo '<br />';
			}
		?>
		<div class="control-group">
			<label class="control-label">Adınız <sup>*</sup></label>
			<div class="controls">
				<?php
				if (isset($_SESSION['userToken'])) {
					echo '<input type="text" placeholder="Ad Soyad" name="ad" value="Müşteri No. '.$_SESSION['userId'].'" readonly>';
				}else{
					echo '<input type="text" placeholder="Ad Soyad" name="ad">';
				}
				?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Mail Adresiniz <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder="Mail" name="mail">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Mesajınız <sup>*</sup></label>
			<div class="controls">
			  <textarea name="mesaj" rows="10"></textarea>
			</div>
		</div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Gönder" class="shopBtn exclusive">
		</div>
	</div>
	</form>
</div>
</div>
</div>
<?php require '/../index/footer.php'; ?>

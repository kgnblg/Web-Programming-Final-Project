<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Siparişler</h3>
				</div>
				<div class="block_cont">
					<p>
					<b>ID:</b> <?php echo $this->params['siparis']->id; ?><br />
					<b>Müşteri Bilgileri:</b> <?php echo $this->params['musteri']->adsoyad.'  '.$this->params['musteri']->mail; ?><br />
					<b>Adres:</b> <?php echo $this->params['adres']->adres; ?><br />
					<b>Sipariş Tarihi:</b> <?php echo $this->params['siparis']->tarih; ?><br />
          <b>Tutar:</b> <?php echo $this->params['siparis']->tutar; ?> TL<br />
          <b>Durum:</b> <?php echo $this->params['siparis']->durum; ?><br />
					<b>Sipariş Detayı:</b><br /><pre><?php echo $this->params['siparis']->detaylar; ?></pre><br />
        </p>
				</div></div>
<?php require 'footer.php'; ?>

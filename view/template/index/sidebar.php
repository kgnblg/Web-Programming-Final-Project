<div id="sidebar" class="span3">
		<div class="well well-small">
			<ul class="nav nav-list">
			  <?php
			    foreach ($this->params['kategori'] as $kat) {
			      echo '<li><a href="'.URL.'/index/home/kategori/'.$kat->id.'"><span class="icon-chevron-right"></span>'.$kat->ad.'</a></li>';
			    }
			  ?>

</ul>
		</div>
		  <div class="well well-small alert alert-warning cntr">
			  <h2>Outlet</h2>
			  <p>
				 İndirimli ürünler için Outlet kategorimize göz atın. <br><br><a class="defaultBtn" href="#">Tıkla </a>
			  </p>
		  </div>
		  <div class="well well-small" ><a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/paypal.jpg" alt="payment method paypal"></a></div>

			<a class="shopBtn btn-block" href="#">Gelecek Ürünler <br><small>Bakmak için tıklayınız.</small></a>
			<br>
			<br>

	</div>

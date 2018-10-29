<?php require 'header.php'; ?>
<h3><?php echo $this->params['secilenKategori']; ?></h3>
	<?php if (empty($this->params['sayfaicerik'])) {
		echo '<center><h5>Bu kategoride ürün bulunamadı.</h5></center><br />';
	} ?>
		<ul class="thumbnails">
      <?php
      foreach ($this->params['sayfaicerik'] as $urun) {
        echo '
        <li class="span3">
  			  <div class="thumbnail">
  				<a href="product_details.html" class="overlay"></a>
  				<a class="zoomTool" href="'.URL.'/index/home/detay/'.$urun->id.'" title="add to cart"><span class="icon-search"></span> DETAY</a>
  				<a href="'.URL.'/index/home/detay/'.$urun->id.'"><img src="'.UPLOAD_URL.$urun->resim->resimurl.'" alt=""></a>
  				<div class="caption cntr">
  					<p>'.$urun->ad.'</p>
  					<p><strong>'.$urun->fiyat.' TL</strong></p>
  					<h4><a class="shopBtn" href="#" title="add to cart"> Sepete Ekle </a></h4>
  					<div class="actionList">
  					</div>
  					<br class="clr">
  				</div>
  			  </div>
  			</li>';
      }
      ?>
		  </ul>
<?php require 'footer.php'; ?>

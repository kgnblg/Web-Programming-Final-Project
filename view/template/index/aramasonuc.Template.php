<?php require 'header.php'; ?>
<div class="row">
		<?php require '/../index/sidebar.php'; ?>
    <div class="span9">
<div class="well well-small">
  <?php
    if (empty($this->params['sonuc'])) {
      echo '<center>Sonuç Bulunamadı.</center><br />';
    }else{
      foreach ($this->params['sonuc'] as $urun) {
        echo '<div class="row-fluid">
      		<div class="span2">
      			<img src="'.UPLOAD_URL.$urun->resim->resimurl.'" alt="">
      		</div>
      		<div class="span6">
      			<h5>'.$urun->ad.'</h5>
      			<p>
      			';
              echo substr($urun->aciklama, 0, 25);
            echo '
      			</p>
      		</div>
      		<div class="span4 alignR">
      		<form class="form-horizontal qtyFrm">
      		<h3>'.$urun->fiyat.' TL</h3>
      		<label class="checkbox">

      		</label><br>
      		<div class="btn-group">
      		  <a href="'.URL.'/index/home/detay/'.$urun->id.'" class="defaultBtn"><span class=" icon-shopping-cart"></span> Sepete Ekle</a>
      		  <a href="'.URL.'/index/home/detay/'.$urun->id.'" class="shopBtn">BAK</a>
      		 </div>
      			</form>
      		</div>
      	</div>
      	<hr class="soften">';
      }
    }
   ?>


</div>
</div>

</div>
<?php require 'footer.php'; ?>

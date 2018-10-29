<?php require 'header.php'; ?>
<div class="row">
<?php require 'sidebar.php'; ?>
<div class="span9">
<div class="well np">
  <div id="myCarousel" class="carousel slide homCar">
          <div class="carousel-inner">
      <div class="item">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s1.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
      <div class="item">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s2.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
      <div class="item active">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s3.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
            <div class="item">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s4.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
            <div class="item">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s5.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
            <div class="item">
              <img style="width:100%" src="<?php echo USER_TEMPLATE; ?>assets/img/slider/s6.png">
              <div class="carousel-caption">
                    <p><span>143311009</span></p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
<!--
New Products
-->
<div class="well well-small">
<h3>Yeni Gelenler</h3>
<hr class="soften"/>
  <div class="row-fluid">
    <ul class="thumbnails">
      <?php
        foreach ($this->params['urunler'] as $urun) {
          echo '<li class="span4">
            <div class="thumbnail">

            <a class="zoomTool" href="'.URL.'/index/home/detay/'.$urun->id.'" title="add to cart"><span class="icon-search"></span> DETAY</a>
            <a href="'.URL.'/index/home/detay/'.$urun->id.'"><img src="'.UPLOAD_URL.$urun->resim->resimurl.'" style="width: 200px; height:200 px;" alt=""></a>
            <div class="caption cntr">
              <p>'.$urun->ad.'</p>
              <p><strong> '.$urun->fiyat.' TL</strong></p>
              <h4><a class="shopBtn" href="'.URL.'/index/home/detay/'.$urun->id.'" title="add to cart"> Sepete Ekle </a></h4>
              <div class="actionList">
              </div>
              <br class="clr">
            </div>
            </div>
          </li>';
        }
      ?>
    </ul>
  </div>
</div>
<!--
Featured Products
-->

</div>
</div>
<?php require 'footer.php'; ?>

<?php require 'header.php'; ?>
<div class="row">
<?php require 'sidebar.php'; ?>
<div class="span9">
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <?php
                    foreach ($this->params['urunmedya'] as $medya) {
                      echo '<div class="item">
                       <a href="#"> <img src="'.UPLOAD_URL.$medya->resimurl.'" alt="" style="width:100%"></a>
                      </div>';
                    }
                  ?>

                </div>
            </div>
			</div>
			<div class="span7">
				<h3><?php echo $this->params['urun']->ad; ?></h3>
				<hr class="soft"/>

				<form class="form-horizontal qtyFrm" method="post" action="<?php echo URL; ?>/musteri/siparis/sepeteekle">
				  <div class="control-group">
						<input type="hidden" name="urunid" value="<?php echo $this->params['urun']->id; ?>">
						<input type="hidden" name="urunfiyat" value="<?php echo $this->params['urun']->fiyat; ?>">
					<label class="control-label"><span><?php echo $this->params['urun']->fiyat; ?> TL</span></label>
					<div class="controls">
					<input name="adet" type="number" class="span6" placeholder="Adet">
					</div>
				  </div>

				  <div class="control-group">
					<label class="control-label"><span>Beden</span></label>
					<div class="controls">
					  <select name="beden" class="span11">
              <?php
              foreach ($this->params['urunbeden'] as $beden) {
                if ($beden->stok != 0) {
                  echo '<option value="'.$beden->beden.'">'.$beden->beden.'</option>';
                }
              }
              ?>
						</select>
					</div>
				  </div>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Sepete Ekle</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Ürün Açıklaması</a></li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Ürün Açıklaması</h4>
				<p><?php echo $this->params['urun']->aciklama; ?></p><br />
				<p>Güncel Ürün Puanı: <?php if (!empty($this->params['puan'])){ echo floor($this->params['puan']); }else { echo '0'; } ?> / 10</p><br />
				<?php if (isset($_SESSION['userToken'])) {
					echo '<h4>Puan Ver</h4>
					<form class="form-horizontal" method="post" action="'.URL.'/musteri/yorum/puanver">
					<input type="hidden" name="urunid" value="'.$this->params['urun']->id.'">
						<div class="control-group">
							<label class="control-label">Puan <sup>*</sup></label>
							<div class="controls">
								<select name="puan">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
					<div class="control-group">
						<div class="controls">
						 <input type="submit" name="submitAccount" value="Ver" class="shopBtn exclusive">
						</div>
					</div>
					</form>';
				}else{
					echo '<center>Sadece üye girişi yapmış kullanıcılar puan verebilir.</center><br />';
				}
				?>
			</div></div></div>

			<?php if (isset($_SESSION['userToken'])) {
				echo '<div class="well">
					<form class="form-horizontal" method="post" action="'.URL.'/musteri/yorum/ekle">
					<input type="hidden" name="urunid" value="'.$this->params['urun']->id.'">
						<h3>Yorum Yap</h3>
						<div class="control-group">
							<label class="control-label">Yorum <sup>*</sup></label>
							<div class="controls">
							  <textarea name="yorum"></textarea>
							</div>
						</div>
					<div class="control-group">
						<div class="controls">
						 <input type="submit" name="submitAccount" value="Ekle" class="shopBtn exclusive">
						</div>
					</div>
					</form>
				</div>';
			}else{
				echo '<div class="well">
					<center>Sadece üye girişi yapmış kullanıcılar yorum yapabilir.</center><br />
				</div>';
			}
			?>

			<div class="well well-small">
				<?php
					if (!empty($this->params['yorum'])) {
						foreach ($this->params['yorum'] as $yorum) {
							echo '<div class="row-fluid">
		<div class="span2">
			<img src="'.USER_TEMPLATE.'assets/img/user.png" alt="" style="margin: 10px;">
		</div>
		<div class="span9">
			<h5>Yorum #'.$yorum->id.' </h5>
			<p>
			'.$yorum->yorum.'
			</p>
		</div>
	</div><hr class="soften">';
						}
					}else{
						echo '<center>Bu ürünle ilgili yorum bulunamadı.</center><br />';
					}
				?>
			</div>
</div>
</div>
<?php require 'footer.php'; ?>

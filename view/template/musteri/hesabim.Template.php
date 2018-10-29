<?php require '/../index/header.php'; ?>
<div class="row">
		<?php require '/../index/sidebar.php'; ?>
    <div class="span9">
	<h3> Hesabım</h3>
	<div class="well">
	<form class="form-horizontal" method="post" action="<?php echo URL; ?>/musteri/auth/bilgiguncelle">
		<h3>Bilgileriniz</h3>
		<div class="control-group">
			<label class="control-label" for="inputFname">Ad Soyad <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="" name="ad" value="<?php echo $this->params['bilgiler']->adsoyad; ?>">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="" name="mail" value="<?php echo $this->params['bilgiler']->mail; ?>">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Yeni Şifre <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Şifre" name="ypass1">
		</div>
	  </div>
    <div class="control-group">
		<label class="control-label">Yeni Şifre Tekrar <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Şifre" name="ypass2">
		</div>
	  </div>
    <div class="control-group">
		<label class="control-label">Güncel Şifreniz <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Şifre" name="pass">
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Güncelle" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>

<div class="well">
	<form class="form-horizontal" method="post" action="<?php echo URL; ?>/musteri/adres/ekle">
		<h3>Yeni Adres Ekle</h3>
		<div class="control-group">
			<label class="control-label">Adres Başlığı <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder="Adres Başlığı" name="baslik">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Adres <sup>*</sup></label>
			<div class="controls">
			  <textarea name="adres"></textarea>
			</div>
		</div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Kaydet" class="shopBtn exclusive">
		</div>
	</div>
	</form>
</div>


<div class="well">
  <h3>Adreslerim</h3>
  <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Başlık</th>
                  <th>Adres</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if (count($this->params['adresList']) == 0) {
                    echo '<tr>
                      <td>-</td>
                      <td>Adres Bulunamadı.</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>';
                  }else{
                  foreach ($this->params['adresList'] as $adres) {
                    echo '<tr>
                      <td>'.$adres->id.'</td>
                      <td>'.$adres->ad.'</td>
                      <td>'.$adres->adres.'</td>
                      <td><a href="'.URL.'/musteri/adres/sil/'.$adres->id.'">Sil</a></td>
                    </tr>';
                  }
                  }
                ?>
              </tbody>
            </table>
</div>


</div>
</div>
<?php require '/../index/footer.php'; ?>

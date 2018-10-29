<?php require 'header.php'; ?>
<div class="row">
		<?php require 'sidebar.php'; ?>
    <div class="span9">
  	<h3> Kayıt Ol / Giriş Yap</h3>
  	<hr class="soft"/>

  	<div class="row">
  		<div class="span4">
  			<div class="well">
  			<h5>HESAP OLUŞTURUN</h5><br/><br/><br/><br/>
  			<form method="post" action="<?php echo URL; ?>/musteri/auth/register">
          <div class="control-group">
  				<label class="control-label" for="inputEmail">Ad Soyad</label>
  				<div class="controls">
  				  <input class="span3"  type="text" placeholder="Ad Soyad" name="ad">
  				</div>
  			  </div>
  			  <div class="control-group">
  				<label class="control-label" for="inputEmail">E-mail addresi</label>
  				<div class="controls">
  				  <input class="span3"  type="text" placeholder="Email" name="mail">
  				</div>
  			  </div>
          <div class="control-group">
  				<label class="control-label" for="inputEmail">Şifre</label>
  				<div class="controls">
  				  <input class="span3"  type="text" placeholder="Şifre" name="pass">
  				</div>
  			  </div>
  			  <div class="controls">
  			  <button type="submit" class="btn block">Oluştur</button>
  			  </div>
  			</form>
  		</div>
  		</div>
  		<div class="span1"> &nbsp;</div>
  		<div class="span4">
  			<div class="well">
  			<h5>GİRİŞ YAPIN</h5>
  			<form>
  			  <div class="control-group">
  				<label class="control-label" for="inputEmail">Email</label>
  				<div class="controls">
  				  <input class="span3"  type="text" placeholder="Email" name="mail">
  				</div>
  			  </div>
  			  <div class="control-group">
  				<label class="control-label" for="inputPassword">Şifre</label>
  				<div class="controls">
  				  <input type="password" class="span3" placeholder="Şifre" name="pass">
  				</div>
  			  </div>
  			  <div class="control-group">
  				<div class="controls">
  				  <button type="submit" class="defaultBtn">Giriş Yap</button>
  				</div>
  			  </div>
  			</form>
  		</div>
  		</div>
  	</div>

  </div>
</div>
<?php require 'footer.php'; ?>

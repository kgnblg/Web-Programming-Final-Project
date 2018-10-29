<?php require '/../index/header.php'; ?>
<div class="row">
		<?php require '/../index/sidebar.php'; ?>
    <div class="span9">
  	<h3> Hesabım</h3>
  	<div class="row">
  		<div class="span9">
        <div class="well well-small">
          <div align="center">
            <?php
              if ($this->params['guncellendiDurum']) {
                echo '<b>Bilgileriniz Başarıyla Güncellendi.</b><br/>';
              }else{
                echo '<b>Bilgileriniz Güncellenemedi.</b><br/>';
              }
            ?>
          </div>
        </div>
      </div>
  	</div>

  </div>
</div>
<?php require '/../index/footer.php'; ?>

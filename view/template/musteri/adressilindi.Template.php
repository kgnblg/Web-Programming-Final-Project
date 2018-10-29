<?php require '/../index/header.php'; ?>
<div class="row">
		<?php require '/../index/sidebar.php'; ?>
    <div class="span9">
  	<h3> Adres</h3>
  	<div class="row">
  		<div class="span9">
        <div class="well well-small">
          <div align="center">
            <?php
              if ($this->params['silindiDurum']) {
                echo '<b>Adres Başarıyla Silindi.</b><br/>';
              }else{
                echo '<b>Adres Silinemedi.</b><br/>';
              }
            ?>
          </div>
        </div>
      </div>
  	</div>

  </div>
</div>
<?php require '/../index/footer.php'; ?>

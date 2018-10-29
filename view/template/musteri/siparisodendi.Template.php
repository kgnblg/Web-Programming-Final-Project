<?php require '/../index/header.php'; ?>
<div class="row">
<div class="span12">
<div class="well well-small">
  <h1>Sepetim <small class="pull-right"></small></h1>
<hr class="soften"/>

<div align="center">
  <?php
    if ($this->params['tamamlandiDurum']) {
      echo '<h2>Siparişiniz Oluşturuldu.</h2><br /><b>Sipariş Kodu: '. $this->params['siparisId'];
    }else{
      echo '<h2>Siparişiniz Oluşturulamadı.</h2>';
    }
  ?>
</div>

</div>
</div>
</div>
<?php require '/../index/footer.php'; ?>

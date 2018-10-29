<?php require 'header.php'; ?>
<div class="row">
		<?php require 'sidebar.php'; ?>
	<div class="span9">
<div class="well well-small">
	<h2><?php echo $this->params['sayfaicerik']->baslik; ?></h2>
<p><?php echo $this->params['sayfaicerik']->icerik; ?></p>
</div>
</div>
</div>
<?php require 'footer.php'; ?>

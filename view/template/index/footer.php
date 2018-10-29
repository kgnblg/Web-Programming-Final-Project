<!--
Clients
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Ürün Markaları</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div align="center">
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo USER_TEMPLATE; ?>assets/img/6.png"></a>
		</div></div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Hesap Yönetimi</h5>
<a href="#">Yeni Kayıt</a><br>
<a href="#">Giriş Yap</a><br>
<a href="#">Hesabım</a><br>
 </div>
<div class="span2">
<h5>Sayfalar</h5>
<a href="contact.html">İletişim</a><br>
<?php
	foreach ($this->params['sayfa'] as $sayfa) {
		echo '<a href="'.URL.'/index/home/sayfa/'.$sayfa->id.'">'.$sayfa->baslik.'</a><br>';
	}
?>
 </div>
<div class="span2">
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
 Malorum" by Cicero are also reproduced in their exact original form,
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="<?php echo USER_TEMPLATE; ?>assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2017<br> 143311009 - Mevlüt Kağan BALGA</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo USER_TEMPLATE; ?>assets/js/jquery.js"></script>
	<script src="<?php echo USER_TEMPLATE; ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo USER_TEMPLATE; ?>assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo USER_TEMPLATE; ?>assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="<?php echo USER_TEMPLATE; ?>assets/js/shop.js"></script>
  </body>
</html>

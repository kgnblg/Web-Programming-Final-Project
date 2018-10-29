<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>143311009 - Ayakkabı Satış Sitesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="<?php echo USER_TEMPLATE; ?>assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?php echo USER_TEMPLATE; ?>style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?php echo USER_TEMPLATE; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="<?php echo USER_TEMPLATE; ?>css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="<?php echo USER_TEMPLATE; ?>http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo USER_TEMPLATE; ?>assets/ico/favicon.ico">
  </head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="<?php echo URL; ?>"> <span class="icon-home"></span> Ana Sayfa</a>
        <?php
          if (!isset($_SESSION['userToken'])) {
            echo '<a href="'.URL.'/musteri/auth/login"><span class="icon-edit"></span> Ücretsiz Kayıt </a>';
          }else{
            echo '<a href="'.URL.'/musteri/auth/hesabim"><span class="icon-user"></span> Hesabım</a>
            ';
          }
        ?>
				<a href="<?php echo URL; ?>/index/home/iletisim"><span class="icon-envelope"></span> İletişim</a>
        <a href="<?php echo URL; ?>/musteri/siparis/sepetim"><span class="icon-shopping-cart"></span> Sepetim</a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.html">
		<img src="<?php echo USER_TEMPLATE; ?>assets/img/logo-bootstrap-shoping-cart.png">
	</a>
	</h1>
	</div>
	<div class="span4">
	</div>
	<div class="span4 alignR">
	<p><br> <strong> İletişim:  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini"><span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">TL</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="<?php echo URL; ?>">Ana Sayfa</a></li>
        <?php
          foreach ($this->params['sayfa'] as $sayfa) {
            echo '<li class=""><a href="'.URL.'/index/home/sayfa/'.$sayfa->id.'">'.$sayfa->baslik.'</a></li>';
          }
        ?>
        <li class=""><a href="<?php echo URL; ?>/index/home/iletisim">İletişim</a></li>
			</ul>
			<form action="<?php echo URL; ?>/index/ara" method="post" class="navbar-search pull-left">
			  <input name="ara" type="text" placeholder="Ürün Ara..." class="search-query span2">
			</form>
      <?php
        if (!isset($_SESSION['userToken'])) {
          echo '<ul class="nav pull-right">
    			<li class="dropdown">
    				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Giriş Yap <b class="caret"></b></a>
    				<div class="dropdown-menu">
    				<form class="form-horizontal loginFrm" method="post" action="'.URL.'/musteri/auth/logincontrol">
    				  <div class="control-group">
    					<input type="text" class="span2" id="inputEmail" placeholder="Email" name="mail">
    				  </div>
    				  <div class="control-group">
    					<input type="password" class="span2" id="inputPassword" placeholder="Şifre" name="pass">
    				  </div>
    				  <div class="control-group">
    					<label class="checkbox">
    					</label>
    					<button type="submit" class="shopBtn btn-block">Giriş</button>
    				  </div>
    				</form>
    				</div>
    			</li>
    			</ul>';
        }else{
          echo '<ul class="nav pull-right">
    			<li class="">
    				<a href="'.URL.'/musteri/auth/logout"><span class="icon-lock"></span> Çıkış Yap </a>

    			</li>
    			</ul>';
        }
      ?>

		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->

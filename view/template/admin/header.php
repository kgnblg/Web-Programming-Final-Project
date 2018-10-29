<!DOCTYPE html>
<html lang="en">
<head>
<title>143311009 - Ayakkabı Satış Sitesi</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/ui/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.corner.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/css_browser_selector.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins/jqplot.cursor.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/editor/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/calendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.multiselect.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/tooltip/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/validation/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/validation/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/js.js"></script>
<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/grid.css" type="text/css" />
<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/js/plugins.css" type="text/css" />
</head>
<body>
	<div id="main" class="container_12"><!-- Body Wrapper Begin -->
		<div id="header"><!-- Header Begin -->
			<div class="grid_3"><a href="#" id="logo" class="float_left">AdminCP</a></div>
		</div><!-- Header End -->
		<div class="clear"></div>
		<div id="userbar"><!-- Userbar Begin -->
			<div id="profile"><!-- Profile Begin -->
				<div id="avatar">
					<img src="<?php echo ADMIN_TEMPLATE; ?>img/suavatar.png" alt="Avatar" height="44" />
				</div>
				<div id="profileinfo">
					<h3 id="username">Hoşgeldiniz, Yönetici</h3>
					<span id="subline"><?php echo date('d.m.Y H:i:s'); ?></span>
					<div class="clear"></div>
					<a href="<?php echo URL; ?>/admin/auth/logout" class="profilebutton">Çıkış Yap</a>
				</div>
			</div><!-- Userbar End -->
			<ul id="navigation"><!-- Main Navigation Begin -->
				<li><a href="<?php echo URL; ?>/admin" class="icon_settings">Ana Sayfa</a></li>
				<li><a href="<?php echo URL; ?>/admin/siparis" class="icon_monitor">Sİparİşler</a>
				</li>
				<li><a href="<?php echo URL; ?>/admin/kategori" class="icon_folder">Kategorİler</a>
					<ul>
						<li><a href="<?php echo URL; ?>/admin/kategori/index/ekle">Yenİ Kategorİ</a></li>
					</ul>
				</li>
				<li><a href="<?php echo URL; ?>/admin/urun" class="icon_tag">Ürünler</a>
					<ul>
						<li><a href="<?php echo URL; ?>/admin/urun/index/ekle">Yenİ Ürün</a></li>
					</ul>
				</li>
				<li><a href="<?php echo URL; ?>/admin/sayfa" class="icon_settings">Sİte Yönetİmİ</a>
					<ul>
						<li><a href="<?php echo URL; ?>/admin/sayfa/ekle">Dinamik Sayfa Oluştur</a></li>
						<li><a href="<?php echo URL; ?>/admin/sayfa/liste">Dinamik Sayfalar</a></li>
						<li><a href="<?php echo URL; ?>/admin/contact">İletişim İstekleri</a></li>
					</ul>
				</li>
				<li><a href="<?php echo URL; ?>/admin/musteri" class="icon_users">Müşterİler</a></li>

			</ul><!-- Main Navigation End -->
		</div><!-- Userbar End -->
		<div class="clear"></div>
		<div id="body">

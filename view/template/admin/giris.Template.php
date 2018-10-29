<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yönetim Paneli Girişi (143311009 - Mevlüt Kağan BALGA)</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.corner.js"></script>
	<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/css_browser_selector.js"></script>
	<script type="text/javascript" src="<?php echo ADMIN_TEMPLATE; ?>data/js/js.js"></script>
	<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/grid.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ADMIN_TEMPLATE; ?>data/css/style.css" type="text/css" />
</head>
<body>
	<div id="loginbox">
		<a href="#" id="logo"></a>
		<div id="loginform">
			<form name="login" action="<?php echo URL; ?>/admin/auth/logincontrol" method="post">
				<div id="username_field"><input name="nick" type="text" name="input" placeholder="Kullanıcı Adı" class="required" value="" /></div>
				<div id="password_field"><input name="pass" type="password" name="password" placeholder="Şifre" class="required" value="" /></div>
				<div id="buttonline">
					<input type="submit" id="loginbutton" class="float_left width_4" value="Giriş Yap" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>

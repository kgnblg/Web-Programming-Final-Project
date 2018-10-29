<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Sayfalar</h3>
				</div>
				<div class="block_cont">
          <p>Bu özellik ile müşterilerin ve ziyaretçilerin gördüğü ana sayfanızı herhangi bir kodlama bilgisi olmadan yönetebilirsiniz. Çeşitli dinamik sayfalar (Hakkımızda, SSS, Gizlilik Sözleşmesi, vb.) oluşturmak için "Dinamik Sayfa Oluştur" butonuna tıklayabilirsiniz. Varolan dinamik sayfaları görmek için "Dinamik Sayfalar" seçeneğine bakabilirsiniz. Site üzerinden gelen iletişim taleplerine bakmak ve yanıtlamak için "İletişim İsteklerini" veya ziyaretçi istatistiklerine bakmak istiyorsanız "İstatistikler" bölümüne gidebilirsiniz.</p>
          <form style="float: left; margin-left: 3px; margin-right: 3px;" class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/ekle">
          <div class="clear"></div><br />
          <div class="form_row"><input type="submit" class="submit" value="Dinamik Sayfa Oluştur" /></div>
          </form>
          <form style="float: left; margin-left: 3px; margin-right: 3px;" class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/liste">
          <div class="clear"></div><br />
          <div class="form_row"><input type="submit" class="submit" value="Dinamik Sayfalar" /></div>
          </form>
          <form style="float: left; margin-left: 3px; margin-right: 3px;" class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/iletisim">
          <div class="clear"></div><br />
          <div class="form_row"><input type="submit" class="submit" value="İletişim İstekleri" /></div>
          </form>
          <form style="float: left; margin-left: 3px; margin-right: 3px;" class="form" method="post" action="<?php echo URL; ?>/admin/sayfa/istatistik">
          <div class="clear"></div><br />
          <div class="form_row"><input type="submit" class="submit" value="İstatistikler" /></div>
          </form><div class="clear"></div></div></div>
<?php require 'footer.php'; ?>

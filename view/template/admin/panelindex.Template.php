<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ana Sayfa</h3>
				</div>
				<div class="block_cont">
							<div align="center">
							<h2>143311009 - Mevlüt Kağan BALGA<br /><br /><br />Web Programlama Final Ödevi</h2><br /><br />
							<form class="form" method="post" action="<?php echo URL; ?>/admin/ara">
							<div class="form_row"><label>Ara:</label><input class="input" name="ara" /></div>
							<div class="form_row"><label>Aranacak Alan:</label><select class="select" name="alan">
								<option value="musteriler">Müşteriler</option>
								<option value="siparisler">Siparişler</option>
								<option value="urunler">Ürünler</option>
							</select>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Ara" /></div>
							</form>
							</div>
				</div>
			</div><!-- Block End -->
		</div>
<div class="block big"><!-- Block Begin -->
	<div class="titlebar">
		<h3>Ziyaretçi İstatistikleri</h3>
	</div>
	<div class="block_cont">
	<div align="center"><h2>Toplam Gelen Ziyaretçi:<br /><br /> <?php
		if (isset($this->params['sayac'])) {
			echo $this->params['sayac']->ziyaretci;
		}else{
			echo '0';
		}
	 ?></h2></div>
	</div>
</div><!-- Block End -->
<?php require 'footer.php'; ?>

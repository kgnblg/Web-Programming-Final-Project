<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Siparişler</h3>
				</div>
				<div class="block_cont">
          <div align="center">
            <?php if (isset($this->params['guncellendiDurum'])) {
              if ($this->params['guncellendiDurum']){
								echo '<img src="'.ADMIN_TEMPLATE.'img/ok.png" /><br /><h2><strong>Sipariş Durumu Güncellendi.</strong></h2>';
							}else{
								echo '<img src="'.ADMIN_TEMPLATE.'img/er.png" /><br /><h2><strong>Sipariş Durumu Güncellenemedi.</strong></h2>';
              }
            }else{
              echo '<form class="form" method="post" action="'.URL.'/admin/siparis/durumguncellendi">
                <input type="hidden" name="sipid" value="'.$this->params['siparisid'].'">
							<div class="form_row">
							<label>Durum:</label>
							<select name="durum" class="select" style="width: 300px;">
                <option value="Kargoya Verildi">Kargoya Verildi</option>
                <option value="Stok Bekleniyor">Stok Bekleniyor</option>
                <option value="İptal Edildi">İptal Edildi</option>
                <option value="Başarısız">Başarısız</option>
							</select>
							</div>
							<div class="form_row"><label>Kargo Takip Kodu:</label><input style="width: 290px;" class="input" name="kargono" placeholder="Kargoya verildi seçeneği ile kullanın." /></div>
							<div class="clear"></div><br />
							<div class="form_row"><input type="submit" class="submit" value="Güncelle" /></div>
            </form>';
            }
            ?>
							</div></div></div>
<?php require 'footer.php'; ?>

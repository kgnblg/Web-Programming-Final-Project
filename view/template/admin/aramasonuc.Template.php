<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Arama Sonucu</h3>
				</div>
				<div class="block_cont"><p>
							<?php
              if (empty($this->params['sonuc'])) {
                echo '<center><h2>Sonuç Bulunamadı.</h2></center><br />';
              }else{
                if ($this->params['alan'] == "musteriler") {
                  foreach ($this->params['sonuc'] as $sonuc) {
                    echo '<b>Bulunan Sonuç:</b><br />
                    Ad Soyad: '.$sonuc->adsoyad.' <a href="'.URL.'/admin/musteri/sil/'.$sonuc->id.'">[SİL]</a><br />
                    Mail: '.$sonuc->mail.'<br /><hr>';
                  }
                }else if ($this->params['alan'] == "siparisler") {
                  foreach ($this->params['sonuc'] as $sonuc) {
                    echo '<b>Bulunan Sonuç:</b><br />
                    Beden: '.$sonuc->beden.' <a href="'.URL.'/admin/siparis/sil/'.$sonuc->id.'">[SİL]</a> - <a href="'.URL.'/admin/siparis/detay/'.$sonuc->id.'">[DETAY]</a><br />
                    Adet: '.$sonuc->adet.'<br />
                    Tarih: '.$sonuc->tarih.'<hr>';
                  }
                }else{
                  foreach ($this->params['sonuc'] as $sonuc) {
                    echo '<b>Bulunan Sonuç:</b><br />
                    Ürün Adı: '.$sonuc->ad.' <a href="'.URL.'/admin/urun/sil/'.$sonuc->id.'">[SİL]</a> - <a href="'.URL.'/admin/urun/detay/'.$sonuc->id.'">[DETAY]</a><br />
                    Fiyat: '.$sonuc->fiyat.' TL<br />
                    Tarih: '.$sonuc->tarih.'<hr>';
                  }
                }

              } ?></p>
			</div><!-- Block End -->
<?php require 'footer.php'; ?>

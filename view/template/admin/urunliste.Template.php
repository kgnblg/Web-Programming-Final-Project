<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
								<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
							<th>Ürün Adı</th>
							<th>Kategorİ</th>
							<th>Tarİh</th>
							<th>Fİyat</th>
							<th></th>
							<th width="80">Eylemler</th>
							</tr>
						</thead>
						<?php
						if (empty($this->params['urunliste'])) {
							echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							</tr>
							';
						}else{
							foreach ($this->params['urunliste'] as $urun) {
							echo '
							<tr>
							<td>'.$urun->id.'</td>
							<td>'.$urun->ad.'</td>
							<td>'.$urun->kategoriadi.'</td>
							<td>'.$urun->tarih.'</td>
							<td>'.$urun->fiyat.' TL</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/urunmedya/index/'.$urun->id.'" class="action edit"><span>Medya</span></a><a href="'.URL.'/admin/urunbeden/index/'.$urun->id.'" class="action edit"><span>Beden</span></a></td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/urun/detay/'.$urun->id.'" class="action view"><span>Detaylar</span></a><a href="'.URL.'/admin/urun/duzenle/'.$urun->id.'" class="action edit"><span>Düzenle</span></a><a href="'.URL.'/admin/urun/sil/'.$urun->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
						</div></div>
<?php require 'footer.php'; ?>

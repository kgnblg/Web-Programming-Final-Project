<?php require 'header.php'; ?>
<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Siparişler</h3>
				</div>
				<div class="block_cont">
								<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
              <th>Tarih</th>
              <th>Durum</th>
              <th>Tutar</th>
							<th width="80">Eylemler</th>
							</tr>
						</thead>
						<?php
							if (empty($this->params['siparis'])) {
								echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
							</tr>
							';
							}else{
							foreach ($this->params['siparis'] as $siparis) {
							echo '
							<tr>
							<td>'.$siparis->id.'</td>
							<td>'.$siparis->tarih.'</td>
              <td>'.$siparis->durum.' <a href="'.URL.'/admin/siparis/durumguncelle/'.$siparis->id.'">(Güncelle)</a></td>
              <td>'.$siparis->tutar.' TL</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/siparis/detay/'.$siparis->id.'" class="action view"><span>Detaylar</span></a><a href="'.URL.'/admin/siparis/sil/'.$siparis->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
				</div></div>
<?php require 'footer.php'; ?>

<?php require 'header.php'; ?>
<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>İletişim</h3>
				</div>
				<div class="block_cont">
								<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
							<th>Ad Soyad</th>
              <th>Mail</th>
							<th width="80">Eylemler</th>
							</tr>
						</thead>
						<?php
							if (empty($this->params['iletisim'])) {
								echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
              <td>-</td>
							</tr>
							';
							}else{
							foreach ($this->params['iletisim'] as $iletisim) {
							echo '
							<tr>
							<td>'.$iletisim->id.'</td>
							<td>'.$iletisim->ad.'</td>
              <td>'.$iletisim->mail.'</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/contact/detay/'.$iletisim->id.'" class="action view"><span>Detaylar</span></a><a href="'.URL.'/admin/contact/sil/'.$iletisim->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
				</div></div>
<?php require 'footer.php'; ?>

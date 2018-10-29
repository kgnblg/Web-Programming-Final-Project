<?php require 'header.php'; ?>
<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Müşteriler</h3>
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
							if (empty($this->params)) {
								echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
              <td>-</td>
							</tr>
							';
							}else{
							foreach ($this->params as $musteri) {
							echo '
							<tr>
							<td>'.$musteri->id.'</td>
							<td>'.$musteri->adsoyad.'</td>
              <td>'.$musteri->mail.'</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/musteri/sil/'.$musteri->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
				</div></div>
<?php require 'footer.php'; ?>

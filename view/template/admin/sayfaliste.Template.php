<?php require 'header.php'; ?>
<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Sayfalar</h3>
				</div>
				<div class="block_cont">
								<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
							<th>Başlık</th>
							<th width="80">Eylemler</th>
							</tr>
						</thead>
						<?php
							if (empty($this->params)) {
								echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
							</tr>
							';
							}else{
							foreach ($this->params as $sayfa) {
							echo '
							<tr>
							<td>'.$sayfa->id.'</td>
							<td>'.$sayfa->baslik.'</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/sayfa/detay/'.$sayfa->id.'" class="action view"><span>Detaylar</span></a><a href="'.URL.'/admin/sayfa/duzenle/'.$sayfa->id.'" class="action edit"><span>Düzenle</span></a><a href="'.URL.'/admin/sayfa/sil/'.$sayfa->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
				</div></div>
<?php require 'footer.php'; ?>

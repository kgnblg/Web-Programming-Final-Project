<?php require 'header.php'; ?>
<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Kategoriler</h3>
				</div>
				<div class="block_cont">
								<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
							<th>Kategorİ Adı</th>
							<th width="80">Eylemler</th>
							</tr>
						</thead>
						<?php
							if (empty($this->params['kategoriliste'])) {
								echo '<tr>
							<td>-</td>
							<td>Veri Bulunamadı.</td>
							<td>-</td>
							</tr>
							';
							}else{
							foreach ($this->params['kategoriliste'] as $kategori) {
							echo '
							<tr>
							<td>'.$kategori->id.'</td>
							<td>'.$kategori->ad.'</td>
							<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/kategori/duzenle/'.$kategori->id.'" class="action edit"><span>Düzenle</span></a><a href="'.URL.'/admin/kategori/sil/'.$kategori->id.'" class="action delete"><span>Sİl</span></a></div></td>
							</tr>';
							}
						}
						?>
					</table></div><!-- Table Wrapper End -->
				</div></div>
<?php require 'footer.php'; ?>

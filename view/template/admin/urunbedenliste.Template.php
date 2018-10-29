<?php require 'header.php'; ?>
	<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Ürünler</h3>
				</div>
				<div class="block_cont">
				<div align="right" style="margin-bottom: 5px;"><a href="<?php echo URL; ?>/admin/urunbeden/ekle/<?php echo $this->params->urunId; ?>">Beden Ekle >></a></div>
							<div class="table"><table><!-- Table Wrapper Begin -->
							<thead>
							<tr>
							<th width="20">ID</th>
							<th>Beden</th>
							<th>Stok</th>
							<th width="80">Eylemler</th>
							</tr>
							</thead>
							<?php
							if ($this->params->rowCount == 0) {
								echo '
									<tr>
									<td>-</td>
									<td>Veri Bulunamadı.</td>
									<td>-</td>
									<td>-</td>
									</tr>';
							}else{
								foreach ($this->params->list as $beden) {
								echo '
									<tr>
									<td>'.$beden->id.'</td>
									<td>'.$beden->beden.'</td>
									<td>'.$beden->stok.'</td>
									<td><div style="height: 3px;">&nbsp;</div><div class="actionbar"><a href="'.URL.'/admin/urunbeden/duzenle/'.$beden->id.'" class="action edit"><span>Düzenle</span></a><a href="'.URL.'/admin/urunbeden/sil/'.$beden->id.'" class="action delete"><span>Sİl</span></a></div></td>
									</tr>';
								}
							}
							?>
								</table></div><!-- Table Wrapper End -->
						</div></div>
<?php require 'footer.php'; ?>

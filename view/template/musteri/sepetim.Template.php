<?php require '/../index/header.php'; ?>
<div class="row">
<div class="span12">
<div class="well well-small">
  <h1>Sepetim <small class="pull-right">Siparişlerinize Bakmak İçin <a href="<?php echo URL; ?>/musteri/siparis/gecmis">TIKLAYINIZ</a>.</small></h1>
<hr class="soften"/>

<?php
  if (empty($this->params['siparisListe'])) {
    echo '<center><h2>Sepetiniz Boş.</h2></center>';
  }else{
    echo '<table class="table table-bordered table-condensed">
                <thead>
                  <tr>
                    <th>Ürün</th>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>Adet </th>
                    <th>Toplam Fiyat</th>
                  </tr>
                </thead>
                <tbody>';
                    $toplamtutar = 0;
                    foreach ($this->params['siparisListe'] as $siparis) {
                      $toplamtutar+=$siparis->toplamucret;
                      echo '<tr>
                        <td><img width="100" src="'.UPLOAD_URL.$siparis->urunresim.'" alt=""></td>
                        <td>'.$siparis->urunad.' <a href="'.URL.'/musteri/siparis/sil/'.$siparis->id.'">[SİL]</a></td>
                        <td>'.$siparis->urunfiyat.' TL</td>
                        <td>
                          <input readonly name="adet" class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="'.$siparis->adet.'">
                        </td>
                        <td>'.$siparis->toplamucret.' TL</td>
                      </tr>';
                    }
                    echo '
                  <tr>
                    <td colspan="4" class="alignR">Toplam Tutar:	</td>
                    <td> '.$toplamtutar.' TL</td>
                  </tr>
                   <tr>
                    <td colspan="4" class="alignR">KDV (%18):	</td>
                    <td> '; echo ($toplamtutar*18)/100; echo ' TL</td>
                  </tr>
           <tr>
                    <td colspan="4" class="alignR">Kargo Bedeli:	</td>
                    <td> 5 TL</td>
                  </tr>
           <tr>
                    <td colspan="4" class="alignR">Genel Toplam:	</td>
                    <td class="label label-primary">'; echo ($toplamtutar + (($toplamtutar*18)/100) + 5); echo ' TL</td>
                  </tr>
          </tbody>
              </table><br/>

        <table class="table table-bordered">
        <tbody>
                  <tr><td>Ödeme Yöntemi & Adres</td></tr>
                   <tr>
           <td>
            <form class="form-horizontal" method="post" action="'.URL.'/musteri/siparis/ode">
              <div class="control-group">
              <div class="controls">
                <select name="odeme">
                  <option value="havale">Havale - EFT</option>
                  <option value="kart">Kredi Kartı</option>
                </select>
              </div>
              </div>
              <div class="control-group">
              <div class="controls">
                <select name="adres">';
                foreach ($this->params['adresler'] as $adres) {
                  echo '<option value="'.$adres->id.'">'.$adres->ad.'</option>';
                }
                echo '</select>
              </div>
              </div>
              <div class="control-group">
              <div class="controls">
                <button type="submit" class="shopBtn">Öde</button>
              </div>
              </div>
            </form>
            </td>
            </tr>
                </tbody>
              </table>';
  }
?>


</div>
</div>
</div>
<?php require '/../index/footer.php'; ?>

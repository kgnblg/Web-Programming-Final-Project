<?php require '/../index/header.php'; ?>
<div class="row">
<div class="span12">
<div class="well well-small">
  <h1>Siparişlerim <small class="pull-right"></small></h1>
<hr class="soften"/>

<?php
  if (empty($this->params['gecmisSiparis'])) {
    echo '<center><h2>Sipariş Listeniz Boş.</h2></center>';
  }else{
    echo '<table class="table table-bordered table-condensed">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tarih</th>
                    <th>Detaylar</th>
                    <th>Durum</th>
                    <th>Tutar</th>
                  </tr>
                </thead>
                <tbody>';
                    foreach ($this->params['gecmisSiparis'] as $siparis) {
                      echo '<tr>
                        <td>'.$siparis->id.'</td>
                        <td>'.$siparis->tarih.'</td>
                        <td>'.$siparis->detaylar.'</td>
                        <td>'.$siparis->durum.'</td>
                        <td>'.$siparis->tutar.' TL</td>
                      </tr>';
                    }
                    echo '
          </tbody>
              </table>';

  }
?>


</div>
</div>
</div>
<?php require '/../index/footer.php'; ?>

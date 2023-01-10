<h4><i class="fa fa-exchange"></i> Data Transaksi</h4>
<hr>
<br>
<div class="row">
<table class="bordered responsive-table col m12 s12">
  <thead>
    <tr>
      <td width="5%" class="center">No</td>
      <td width="20%" class="center">Id Transaksi</td>
      <td width="15%" class="center">Tanggal Pesan</td>
      <td width="15%" class="center">Batas Bayar</td>
      <td width="15%" class="center">Total Biaya</td>
      <td width="10%" class="center">Status</td>
      <td width="15%" class="center">Opsi</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $today = (abs(strtotime(date("Y-m-d"))));
    $i = 1;

    foreach ($get->result() as $key) :
    ?>

    <tr>
      <td class="center"><?= $i++; ?></td>
      <td class="center"><?= $key->id_order; ?></td>
      <td class="center"><?= date("d M Y", strtotime($key->tgl_pesan)); ?></td>
      <td class="center"><?= date("d M Y", strtotime($key->bts_bayar)); ?></td>
      <td style="text-align:right">Rp. <?= number_format($key->total, 0, ',', '.') ?>;,-</td>
      <td class="center">
        <?php
        $batas = (abs(strtotime($key->bts_bayar)));

        if ($today > $batas && $key->status == 'belum') {
          echo 'Kadaluarsa';
        } else {
          echo ucfirst($key->status);
        }
         ?>
      </td>
      <td class="center">
        <a href="<?= base_url(); ?>home/detail_transaksi/<?=$key->id_order;?>" class="bt btn-floating green"><i class="fa fa-search-plus"></i></a>

        <?php
        if ($key->status != 'proses') {
        ?>
          <a href="<?= base_url(); ?>home/hapus_transaksi/<?=$key->id_order;?>" class="btn btn-floating red" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
        <?php } ?>
      </td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
</div>
<br>
<div class="right">
  <button type="button" class="btn red" onclick="window.history.go(-1)" name="button">Kembali</button>
</div>

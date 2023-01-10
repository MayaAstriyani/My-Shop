<h4><i class="fa fa-shopping-cart"></i> Data Belanja</h4>
<hr>
<br>
<?php validation_errors('<p style="color:red">','</p>'); ?>
<div class="row">
<table class="bordered responsive-table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama Barang</td>
      <td>Berat</td>
      <td>Jumlah</td>
      <td>Harga Barang</td>
      <td width="100px;">Opsi</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach($this->cart->contents() as $key) :
    ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $key['name']; ?></td>
      <td><?= number_format($key['weight'], 0, ',','.').'gram';?></td>
      <td><?= $key['qty']; ?></td>
      <td>Rp. <?= number_format($key['price'], 0, ',','.');?></td>
      <td>
        <a href="#<?= $key['rowid']; ?>" class="btn-floating orange"><i class="fa fa-edit"></i></a>
        <a href="<?= base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn-floating red"
        onclick="return confirm('Yakin ingin menghapus item ini dari keranjang anda ?')"><i
        class="fa fa-trash"></i></a>
      </td>
    </tr>
    <div class="modal" id="<?= $key['rowid']; ?>">
      <form class="" action="<?= base_url(); ?>cart/update/<?= $key['rowid']; ?>" method="post">
        <div class="row">
          <div class="col m10 s12 offset-m1">
            <div class="modal-content">
              <h5><i class="fa fa-edit"></i>Edit Pesanan</h5>
              <br>
              <div class="input-field">
                <input type="text" name="qty" value="<?= $key['name']; ?>" id="name<?=
                $key['rowid']; ?>" readonly="readonly">
                <label for="name<?= $key['rowid']; ?>">Nama Barang</label>
              </div>
              <div class="input-field">
                <input type="number" name="qty" value="<?= $key['qty']; ?>" id="qty<?=
                $key['rowid']; ?>" autofocus>
                <p style="color:#6b6b6b; margin-top:-15px;"><i>* Isi dengan angka</i></p>
                <label for="qty<?= $key['rowid']; ?>">Jumlah Pesan</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="submit" value="Submit" class="modal-action btn blue">Update Pesanan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  <?php endforeach; ?>
  <tr>
    <td colspan="4">Total</td>
    <td colspan="1">Rp. <?= number_format($this->cart->total(),0, ',','.'); ?></td>
  </tr>
  </tbody>
</table>
</div>
<br>
  <a href="<?= base_url(); ?>checkout" class="btn blue"><i class="fa fa-shopping-bag"></i>Checkout</a>
  <button type="button" class="btn red" onclick="window.history.go(-1)" name="button">Kembali</button>

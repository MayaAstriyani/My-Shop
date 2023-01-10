<div class="row">
  <div class="col m10 s12 offset-m1">
    <h4 style="color:#939393"><i class="fa fa-pencil-square-o"></i>Form Registrasi</h4>
    <hr>
    <br>
    <?php validation_errors('<p style="color:red">','</p>'); ?>
    <form class="" action="" method="post">
      <div class="col m10 s12">
        <div class="row">
          <div class="input-field col m6 s12">
            <input type="text" id="first_name" class="validate" name="nama1" value="<?= $nama1; ?>">
            <label for="first_name">Nama Depan</label>
          </div>
          <div class="input-field col m6 s12">
            <input type="text" id="last_name" class="validate" name="nama2" value="<?= $nama2; ?>">
            <label for="last_name">Nama Belakang</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col m8 s12">
            <input type="text" id="username" class="validate" name="user" value="<?= $user; ?>">
            <label for="username">Username</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col m8 s12">
            <input type="email" id="email" class="validate" name="email" value="<?= $email; ?>">
            <label for="email">E-Mail</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col m6 s12">
            <input type="password" id="password" class="validate" name="pass1" value="">
            <label for="password">Password</label>
          </div>
          <div class="input-field col m6 s12">
            <input type="password" id="password" class="validate" name="pass2" value="">
            <label for="password">Ketik Ulang Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <label>Jenis Kelamin</label>
            <br>
            <p>
              <input type="radio" id="lk" value="L" class="with-gap"  name="jk" <?php if ($jk == 'L') { echo 'checked'; } ?>/>
              <label for="lk">Laki-laki</label>
              <input type="radio" id="pr" value="P" class="with-gap" name="jk" <?php if ($jk == 'P') { echo 'checked'; } ?>/>
              <label for="pr">Perempuan</label>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="input-field col m8 s12">
            <input type="number" class="validate" id="telp" name="telp" value="<?= $telp; ?>">
            <label for="telp">Telp</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="alamat" class="materialize-textarea" name="alamat"><?= $alamat; ?></textarea>
            <label for="alamat">Alamat</label>
          </div>
        </div>

        <div class="row right">
          <button type="button" onclick="window.history.go(-1)" class="btn red waves-effect waves-light">Kembali</button>
          <button type="submit" name="submit" value="Submit" class="btn blue waves-effect waves-light">Submit <i class="fa fa-paper-plane"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Myshop</title>
    <!-- Materialize Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css">
    <!--Font-Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/font-awesome/css/font-awesome.min.css">
    <!--customCss -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
  </head>
  <body>
    <header>
      <nav class="light-blue darken-2">
        <div class="nav-wrapper container">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i>Home</a></li>

            <li><a href="#" class="dropdown-button" data-activates="kat1"><i class="fa
              fa-tags"></i>Kategori<i class="fa fa-caret-down right"></i></a></li>

            <ul class="dropdown-content" id="kat1">
              <?php foreach ($kategori->result() as $kat): ?>
              <li><a href="<?= base_url(); ?>home/kategori/<?= $kat->url; ?>"><?= $kat->kategori; ?></a></li>
              <?php endforeach; ?>
            </ul>

            <?php if ($this->session->userdata('user_login')) { ?>

              <li><a href="#" class="dropdown-button" data-activates="drop1"><i class="fa
                fa-user"></i><?= ucwords($this->session->userdata('name')); ?><i class="fa fa-caret-down right"></i></a></li>

              <ul class="dropdown-content" id="drop1">
                <li><a href="<?= base_url(); ?>home/profil"><i class="fa fa-user"></i>Profil</a></li>
                <li><a href="<?= base_url(); ?>home/password"><i class="fa fa-key"></i>Ubah Password</a></li>
                <li><a href="<?= base_url(); ?>home/transaksi"><i class="fa fa-exchange"></i>Transaksi</a></li>
                <li><a href="<?= base_url(); ?>home/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
              </ul>
            <?php } else { ?>

            <li><a href="<?= base_url(); ?>home/login"><i class="fa fa-sign-in"></i>Login</a></li>
            <li><a href="<?= base_url(); ?>home/registrasi"><i class="fa fa-edit"></i>Registrasi</a></li>

            <?php } ?>
            <li>
              <a href="<?= base_url(); ?>cart">
                <i class="fa fa-shopping-cart"></i>
                <?php
                  if ($this->cart->total() > 0) {
                    echo 'Rp. '.number_format($this->cart->total(),0, ',','.');
                  } else {
                    echo 'Cart';
                  }
                 ?>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <ul id="slide-out" class="side-nav">
          <li><a href="#"><i class="fa fa-user"></i>Home</a></li>

          <li><a href="#" class="dropdown-button" data-activates="kat2"><i class="fa
            fa-tags"></i>Kategori<i class="fa fa-caret-down right"></i></a></li>

          <ul class="dropdown-content" id="kat2">
            <?php foreach ($kategori->result() as $kat): ?>
            <li><a href="<?= base_url(); ?>home/kategori/<?= $kat->url; ?>"><?= $kat->kategori; ?></a></li>
            <?php endforeach; ?>
          </ul>

          <?php if ($this->session->userdata('user_login')) { ?>

            <li><a href="#" class="dropdown-button" data-activates="drop2"><i class="fa
              fa-user"></i><?= ucwords($this->session->userdata('name')); ?><i class="fa fa-caret-down right"></i></a></li>

            <ul class="dropdown-content" id="drop2">
              <li><a href="<?= base_url(); ?>home/profil"><i class="fa fa-user"></i>Profil</a></li>
              <li><a href="<?= base_url(); ?>home/password"><i class="fa fa-key"></i>Ubah Password</a></li>
              <li><a href="<?= base_url(); ?>home/transaksi"><i class="fa fa-exchange"></i>Transaksi</a></li>
              <li><a href="<?= base_url(); ?>home/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
          <?php } else { ?>

          <li><a href="<?= base_url(); ?>home/login"><i class="fa fa-sign-in"></i>Login</a></li>
          <li><a href="<?= base_url(); ?>home/registrasi"><i class="fa fa-edit"></i>Registrasi</a></li>

          <?php } ?>
          <li><a href="#"><i class="fa fa-shopping-cart"></i>Cart</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="toko">
        <h2><a href="#"><i class="fa fa-shopping-cart"></i>MyShop</a></h2>
        <p>Teman Belanja Anda yang Terpercaya</p>
      </div>
      <div class="cont">
        <!-- start item -->
        <div class="item">
          <?= $content; ?>
        <!-- End item -->
        </div>

        <footer class="page-footer light-blue darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Alamat Toko</h5>
                <p class="grey-text text-lighten-4">Jl. Raya Pucang SMKN 1 Bawang</p>
              </div>
              <div class="col l5 offset-l1 s12">
                <h5 class="white-text">Kami di</h5>
                <div class="link">
                  <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook"></i>Facebook</a>&nbsp;
                  <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter"></i>Twitter</a>&nbsp;
                  <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-google-plus"></i>Google</a>&nbsp;
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              Copyright @ 2018 MyShop, All Rights Reserved
              <span class="grey-text text-lighten-4 right">Develope By <a class="blue-text text-lighten-4" href="#!">Maya Astriyani</a></span>
            </div>
          </div>
        </footer>
      </div>
    </main>

    <a href="#" class="btn-floating btn-large waves-effect waves-light red back-top"><i class="fa-angle-double-up"></i></a>

    <!-- Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>admin_assets/js/jquery.min.js"></script>
    <!-- materialize -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/materialize.min.js"></script>
    <!-- custom -->
    <script type="text/javascript">
      $(".button-collapse").sideNav();
      $(".modal").modal();
      $(document).ready(function() {
        <?php if ($this->uri->segment(1) == 'checkout' || $this->uri->segment(1) == 'Checkout') { ?>

          $('#prov').change(function() {
            var prov = $('#prov').val();
            var province = prov.split(',');

            $.ajax({
              url: "<?=base_url();?>checkout/city",
              method: "POST",
              data: { prov : province[0] },
              success: function(obj) {
                $('#kota').html(obj);
              }
            });
          });

          $('#kota').change(function() {
            var kota = $('#kota').val();
            var dest = kota.split(',');
            var kurir = $('#kurir').val()

            $.ajax({
              url: "<?=base_url();?>checkout/getcost",
              method: "POST",
              data: { dest : dest[0], kurir : kurir },
              success: function(obj) {
                $('#layanan').html(obj);
              }
            });
          });

          $('#kurir').change(function() {
            var kota = $('#kota').val();
            var dest = kota.split(',');
            var kurir = $('#kurir').val()

            $.ajax({
              url: "<?=base_url();?>checkout/getcost",
              method: "POST",
              data: { dest : dest[0], kurir : kurir },
              success: function(obj) {
                $('#layanan').html(obj);
              }
            });
          });

          $('#layanan').change(function() {
            var layanan = $('#layanan').val();

            $.ajax({
              url: "<?=base_url();?>checkout/cost",
              method: "POST",
              data: { layanan : layanan },
              success: function(obj) {
                var hasil = obj.split(",");

                $('#ongkir').val(hasil[0]);
                $('#total').val(hasil[1]);
              }
            });
          });

        <?php } ?>
        $(window).scroll(function() {
          if ($(this).scrollTop() > 80) {
            $('.back-top').fadeIn();
          } else {
            $('.back-top').fadeOut();
          }
        });
        $('.back-top').click(function(){
          $("html, body").animate({ scrollTop: 0}, 600);
          return false;
        });
      });
    </script>
  </body>
</html>

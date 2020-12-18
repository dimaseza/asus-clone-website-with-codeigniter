<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Daftar ASUS</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?= base_url('./assets/css/register.css'); ?>">
</head>

<body>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <a class="navbar-brand" href="<?php echo base_url() ?>">
                                    <img width="100" src="<?= base_url('./assets/images/asus-logo.png'); ?>" alt="Asus Logo">
                              </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                              </button>
                        </ul>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Bahasa Indonesia
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <li><a class="dropdown-item" href="#">English</a></li>
                                          <li><a class="dropdown-item" href="#">Portugis</a></li>
                                          <li><a class="dropdown-item" href="#">Italiano</a></li>
                                    </ul>
                              </li>
                        </ul>
                  </div>
            </div>
      </nav>

      <!-- Body -->
      <section class="bodyHero shadow bg-white rounded">
            <div class="p-5">
                  <h4 class="mb-4">Mendaftar Sekarang</h4>
                  <p class="deskripsi1">Harap perhatikan bahwa akun ASUS sama dengan akun ROG. Jika Anda memiliki salah
                        satu akun tersebut,
                        Anda dapat <a class="linkLogin" href="<?php echo site_url('login') ?>">masuk log</a> secara langsung tanpa perlu mendaftarkan
                        yang baru.
                  </p>
                  <p class="deskripsi2 mb-4">
                        Yakinlah bahwa informasi yang dikumpulkan hanya akan digunakan untuk tujuan pendaftaran dan
                        pengelolaan akun Anda. <br>
                        Setelah keanggotaan Anda berhasil didaftarkan, kami juga akan membantu Anda mendaftar sebagai
                        Anggota Awan ASUS yang dimiliki oleh ASUS Cloud Corporation dengan akun dan kata sandi yang
                        sama.
                  </p>
                  <form method="post" action="<?= site_url('register/registeruser'); ?>">
                        <div class="form-group">
                              <input class="mb-5" type="text" class="form-control form-control-user" placeholder="Nama: Masukkan nama anda" id="name" name="name" value="<?= set_value('name'); ?>">
                              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                              <input class="mb-5" type="text" class="form-control form-control-user" placeholder="Akun:Akun anda adalah alamat E-mail" id="email" name="email" value="<?= set_value('email'); ?>">
                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                              <input class="mb-5" type="password" class="form-control form-control-user" placeholder="Password:huruf atau angka, 8~25 karakter" id="password1" name="password1">
                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                              <input class="mb-5" type="password" class="form-control form-control-user" placeholder="Masukkan Ulang Password:Masukkan password anda kembali" id="password2" name="password2">
                        </div>
                        <div class="titleCheckbox container">
                              <label class="custom-control custom-checkbox">
                                    <input type="checkbox" id="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="titleText custom-control-label">Saya menyetujui seluruh ketentuan berikut ini
                                          dan
                                          Kebijakan Privasi.</span>
                              </label>
                        </div>
                        <ul class="mb-5">
                              <li>
                                    <div class="container">
                                          <label class="custom-control custom-checkbox">
                                                <input type="checkbox" id="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Saya mengetahui dan menyetujui
                                                      <a class="asusLink" href="#">ASUS</a><a class="textLink" href="#">"Kebijakan
                                                            Privasi"</a></span>
                                          </label>
                                    </div>
                              </li>
                              <li>
                                    <div class="container">
                                          <label class="custom-control custom-checkbox">
                                                <input type="checkbox" id="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Saya mengetahui dan menyetujui <a class="asusLink" href="#">ASUS
                                                            Cloud</a><a class="textLink" href="#">"Kebijakan
                                                            Privasi"</a></span>
                                          </label>
                                    </div>
                              </li>
                              <li>
                                    <div class="container">
                                          <label class="custom-control custom-checkbox">
                                                <input type="checkbox" id="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Beri tahu saya tentang berita, produk
                                                      terbaru, dan informasi layanan ASUS melalui email dan
                                                      pemberitahuan.</span>
                                          </label>
                                    </div>
                              </li>
                              <li>
                                    <div class="container">
                                          <label class="custom-control custom-checkbox">
                                                <input type="checkbox" id="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Beri tahu saya tentang berita, produk
                                                      terbaru, dan informasi layanan ASUS Cloud melalui email dan
                                                      pemberitahuan.</span>
                                          </label>
                                    </div>
                              </li>
                        </ul>
                        <center>
                              <button type="submit" class="btn btn-primary">Daftar</button>
                        </center>
                  </form>
            </div>
      </section>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ASUS Account</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="<?= base_url('./assets/css/login.css'); ?>">
</head>

<body>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <a class="navbar-brand" href="<?php echo base_url(); ?>">
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
      <section class="bodyHero mb-3 mt-5 p-5 shadow p-3 mb-5 bg-white rounded">
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <img src="<?= base_url('./assets/images/image-hero.PNG'); ?>" alt="image">
                              <p class="memberAsus mt-3 mb-4">
                                    Jadilah Anggota ASUS
                              </p>
                              <a href="#" style="font-size: 16px;">Mendaftar Sekarang</a>
                              <p class="descriptionText mt-2 mb-4">
                                    Selain diskon terkeren yang ditawarkan secara berkala oleh ASUS, kabar tentang
                                    promosi penjualan, dan informasi teranyar tentang ASUS, Anda juga akan menikmati
                                    layanan dukungan teknologi yang istimewa untuk meningkatkan pengalaman Anda sebagai
                                    pengguna produk kami.
                              </p>
                              <div class="row">
                                    <div class="col-2">
                                          <img src="<?= base_url('./assets/images/layanan.png'); ?>" alt="Layanan">
                                    </div>
                                    <div class="col">
                                          <h6>Layanan Terpersonalisasi</h6>
                                          <p class="descriptionDetail">Nikmati pusat informasi terpersonalisasi, layanan
                                                pascajual, dan layanan
                                                pelanggan yang paling lengkap.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-2">
                                          <img src="<?= base_url('./assets/images/webstorage.png'); ?>" alt="Web Storage">
                                    </div>
                                    <div class="col">
                                          <h6>WebStorage</h6>
                                          <p class="descriptionDetail">5GB ruang di Awan secara gratis</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-2">
                                          <img src="<?= base_url('./assets/images/eshop.png'); ?>" alt="Layanan">
                                    </div>
                                    <div class="col">
                                          <h6>eShop</h6>
                                          <p class="descriptionDetail">Informasi terbaru tentang aksesori dan produk
                                                yang diremajakan</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col">
                              <h3 class="logText mb-2">
                                    Log Masuk Akun
                              </h3>

                              <?= $this->session->flashdata('message'); ?>

                              <form method="post" action="<?= base_url('login/loginuser'); ?>">
                                    <label for="email" class="form-label">Email/Telepon Anda</label>
                                    <div class="input-group mb-4">
                                          <input class="inputEmail" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
                                          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <label for="password" class="form-label">Kata Sandi Anda</label>
                                    <div class="input-group mb-4">
                                          <input class="inputPassword" type="password" id="password" name="password">
                                          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Log Masuk</button>
                              </form>
                              <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                          Ingat Saya
                                    </label>
                              </div>
                              <div class="mb-4">
                                    <div class="row">
                                          <div class="col-4">
                                                <a href="<?php echo site_url('account') ?>">
                                                      Mendaftar Sekarang
                                                </a>
                                          </div>
                                          <div class="col-4">
                                                <a href="#">
                                                      Lupa kata sandi?
                                                </a>
                                          </div>
                                    </div>
                              </div>
                              <hr class="mb-4">
                              <p class="textDescription mb-2">
                                    Anda dapat menggunakan akun dan kata sandi di bawah ini untuk masuk log secara
                                    langsung sebagai anggota.
                              </p>
                              <button type="button" class="btnOutline mb-3 btn-outline-primary">Facebook</button>
                              <button type="button" class="btnOutline btn-outline-primary">Google</button>
                        </div>
                  </div>
            </div>
      </section>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
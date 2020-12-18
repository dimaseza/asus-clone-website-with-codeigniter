<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ASUS Indonesia</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="./assets/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <a class="navbar-brand" href="#">
                        <img width="100" src="./assets/images/asus-logo.png" alt="Asus Logo">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item dropdown m-1" aria-hidden="true">
                                    <a class="nav-link" href="#" data-toggle="dropdown">
                                          Produk
                                    </a>
                                    <ul class="dropdown-menu">
                                          <li class="dropdown-submenu"><a class="dropdown-item" href="#">Phone</a>
                                                <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="#">Phone</a>
                                                            <ul>
                                                                  <li><a class="phoneMenu" href="<?php echo site_url('gamingphone') ?>">Gaming Phone</a>
                                                                  </li>
                                                                  <li><a class="phoneMenu" href="#">Zenfone</a></li>
                                                                  <li><a class="phoneMenu" href="#">Zenfone Max</a></li>
                                                                  <li><a class="phoneMenu" href="#">Zenfone Live</a>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                      <li><a class="dropdown-item" href="#">Phone Accessories</a>
                                                            <ul>
                                                                  <li><a class="phoneMenu" href="#">Cases, Covers &
                                                                              Sleeves</a>
                                                                  </li>
                                                                  <li><a class="phoneMenu" href="#">Screen
                                                                              Protectors</a></li>
                                                                  <li><a class="phoneMenu" href="#">Gaming
                                                                              Accessories</a></li>
                                                      </li>
                                                </ul>
                                          </li>
                                    </ul>
                              </li>
                              <li><a class="dropdown-item" href="#">Laptop & PC 2-in-1</a></li>
                              <li><a class="dropdown-item" href="#">Motherboards</a></li>
                              <li><a class="dropdown-item" href="#">Graphics Cards</a></li>
                              <li><a class="dropdown-item" href="#">Desktop & PC All-in-One</a></li>
                              <li><a class="dropdown-item" href="#">Display & Projector</a></li>
                              <li><a class="dropdown-item" href="#">Networking</a></li>
                              <li><a class="dropdown-item" href="#">Sound</a></li>
                              <li><a class="dropdown-item" href="#">Peripheral & Data Storage</a></li>
                              <li><a class="dropdown-item" href="#">Gaming</a></li>
                              <li><a class="dropdown-item" href="#">ProArt</a></li>
                              <li><a class="dropdown-item" href="#">Power-Supply-Unit</a></li>
                              <li><a class="dropdown-item" href="#">Server & Workstation Komersial</a></li>
                              <li><a class="dropdown-item" href="#">AIoT & Industrial Solutions</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link" href="#" data-toggle="dropdown">
                                    What's Hot
                              </a>
                              <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                              </ul>
                        </li>
                        <li class="nav-item m-1">
                              <a class="nav-link" href="#">Business</a>
                        </li>
                        <li class="nav-item m-1">
                              <a class="nav-link" href="#">ProArt</a>
                        </li>
                        <li class="nav-item m-1">
                              <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item m-1">
                              <a class="nav-link" href="#">ROG</a>
                        </li>
                        </ul>
                        <div class="row">
                              <div class="col">
                                    <?php if ($this->session->userdata('email') == null) : ?>
                                          <a class="nav-link" href=<?php echo site_url('login'); ?>>
                                                LOGIN
                                          </a>
                                    <?php else : ?>
                                          <ul class="navbar-nav ml-auto">
                                                <li class="nav-item dropdown no-arrow">
                                                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <img class="img-profile rounded-circle" width="40" height="40" src="<?= base_url('assets/img/profile/default.jpg') ?>">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                            <span class="mx-4 my-5 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('email'); ?></span>
                                                            <a class="dropdown-item" href="#">
                                                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                  My Profile
                                                            </a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?= base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                  Logout
                                                            </a>
                                                      </div>
                                                </li>

                                          </ul>
                                    <?php endif; ?>
                              </div>
                              <div class="col nav-item dropdown align-self-center">
                                    <a href="#" role="button" data-bs-toggle="dropdown">
                                          <img width="20" src="./assets/images/search-icon.png" data-toggle="dropdown" />
                                    </a>
                                    <ul class="dropdown-menu">
                                          <li>
                                                <a class="dropdown-item" href="#">
                                                      <div class="form-group">
                                                            <span class="fa fa-search form-control-icon"></span>
                                                            <input type="text" class="form-control">
                                                      </div>
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                              <!-- <div class="col">
                                    <a class="nav-link align-self-center" href="#" data-toggle="dropdown">
                                          <img width="20" src="images/search-icon.png" alt="Search Icon">
                                    </a>
                              </div> -->
                        </div>
                  </div>
            </div>
      </nav>

      <!-- Carousel -->
      <section>
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
                  <ol class="carousel-indicators">
                        <li data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselIndicators" data-bs-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                        <div class="carousel-item active">
                              <img src="./assets/images/slider1.PNG" class="d-block w-100" alt="Slider 1">
                        </div>
                        <div class="carousel-item">
                              <img src="./assets/images/slider2.PNG" class="d-block w-100" alt="Slider 2">
                        </div>
                        <div class="carousel-item">
                              <img src="./assets/images/slider3.PNG" class="d-block w-100" alt="Slider 3">
                        </div>
                  </div>
            </div>
      </section>

      <!-- Body 1 -->
      <section class="body1 mb-2">
            <div class="container">
                  <div class="row">
                        <div class="col-4">
                              <img width="450" height="200" src="./assets/images/stay-at-home.PNG" alt="">
                        </div>
                        <div class="col-4">
                              <img width="450" height="200" src="./assets/images/business.PNG" alt="">
                        </div>
                        <div class="col-4">
                              <img width="450" height="200" src="./assets/images/rog.PNG" alt="">
                        </div>
                  </div>
            </div>
      </section>

      <!-- Body 2 -->
      <section class="body2 mt-2">
            <div>
                  <img width="100%" src="./assets/images/year-end.PNG" alt="image year end">
            </div>
      </section>

      <!-- Body 3 -->
      <section class="body3 mt-5 mb-5">
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <ul>
                                    <h6>Ketahui Lebih Lanjut</h6>
                                    <br>
                                    <li>
                                          <a href="#">SonicMaster</a>
                                    </li>
                                    <li>
                                          <a href="#">ASUS Design Center</a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                ROG
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                ASUSPRO
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                ASUS HealthCare
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                ASUS Story
                                          </a>
                                    </li>
                              </ul>
                        </div>
                        <div class="col">
                              <ul>
                                    <h6>Tentang Kami</h6>
                                    <br>
                                    <li>
                                          <a href="#">Tentang ASUS</a>
                                    </li>
                                    <li>
                                          <a href="#">Berita</a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Penghargaan
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Internal Audit
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Relasi Investor
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Ketenagakerjaan
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Tentang CSR
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Garansi, Call Center & Service Center
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Press Room
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Where to Buy - Phone
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Where to Buy - Laptop, PC, and Gaming
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Where to Buy - Zephyrus G14 - ACRNM
                                          </a>
                                    </li>
                              </ul>
                        </div>
                        <div class="col">
                              <ul>
                                    <h6>Butuh Bantuan?</h6>
                                    <br>
                                    <li>
                                          <a href="#">
                                                Hubungi Kami
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Registrasi Produk
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                ACO Program
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Download Product Guide
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                                Senin - Jumat : 9:30 - 17:00
                                          </a>
                                    </li>
                              </ul>
                        </div>
                        <div class="col">
                              <ul>
                                    <h6>Community</h6>
                                    <br>
                                    <li>
                                          <img width="150" src="./assets/images/icon-community.PNG" alt="icon community">
                                    </li>
                              </ul>
                        </div>
                  </div>
            </div>
      </section>

      <!-- Body 4 -->
      <section class="body4">
            <div class="container align-self-center">
                  <div class="row">
                        <div class="language col">
                              <a href="#">
                                    Indonesia / Bahasa Indonesia
                              </a>
                        </div>
                        <div class="col">
                              <div class="row">
                                    <div class="col-2">
                                          <a class="footerText" href="#">
                                                Kebijakan Privasi
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a class="footerText" href="#">
                                                Terms of Use Notice
                                          </a>
                                    </div>
                                    <div class="copyright col-6">
                                          <a href="#">
                                                ©ASUSTeK Computer Inc. All rights reserved.
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
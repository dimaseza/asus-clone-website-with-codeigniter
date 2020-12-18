<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Daftarkan</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="./assets/css/account.css">
</head>

<body>

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <a class="navbar-brand" href="<?php echo site_url('home') ?>">
                                    <img width="100" src="./assets/images/asus-logo.png" alt="Asus Logo">
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
      <div class="bodyHero">
            <center>
                  <div class="py-5 px-5">
                        <h3>Daftarkan</h3>
                  </div>
                  <button type="button" class="btnOutline mb-3 btn-outline-primary">Facebook</button>
                  <button type="button" class="btnOutline mb-3 btn-outline-primary">Google</button>
                  <div class="container">
                        <div class="row">
                              <div class="col">
                                    <hr style="margin-left: 50%;">
                              </div>
                              <div class="col-1">
                                    <p class="orText">
                                          or
                                    </p>
                              </div>
                              <div class="col">
                                    <hr style="margin-right: 50%;">
                              </div>
                        </div>
                  </div>
                  <div class="mt-4 mb-2">
                        <p class="informationText">
                              Harap perhatikan bahwa akun ASUS sama dengan akun ROG. Jika Anda memiliki salah satu akun
                              tersebut,
                              Anda dapat <a href="<?php echo site_url('login') ?>">masuk log</a> secara langsung tanpa perlu mendaftarkan yang baru.
                        </p>
                  </div>
                  <a href="<?php echo site_url('register') ?>"><button onclick="" type="button" class="btnOutline mb-3 btn-outline-primary">Daftarkan dengan Email</button></a>
                  <button type="button" class="btnOutline btn-outline-primary">Daftarkan dengan Telepon</button>
                  <div class="mt-2 mb-2 pb-5">
                        <p class="registrationInfoNumber">
                              Register by mobile number can only be served in some areas currently.
                        </p>
                  </div>
            </center>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
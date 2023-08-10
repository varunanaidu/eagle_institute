<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eagle Institute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6438daa9eb.js" crossorigin="anonymous"></script>

    <!-- <link href="./input/main.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="./asset/css/internal/eadc-section.css" />
    <link rel="stylesheet" href="./asset/css/internal/mitra.css" />
    <link rel="stylesheet" href="./asset/css/internal/galery.css" />

    <link rel="stylesheet" href="./asset/css/internal/navbar-banner.css" />
    <link rel="stylesheet" href="./asset/css/internal/about.css" />
    <link rel="stylesheet" href="./asset/css/internal/program.css" />
    <link rel="stylesheet" href="./asset/css/internal/alumni.css" />

    <link rel="stylesheet" href="./asset/css/internal/visiMisi.css" />
    <link rel="stylesheet" href="./asset/css/internal/main_achv.css" />
    <link rel="stylesheet" href="./asset/css/internal/footer.css" />

    <!-- Animated -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- SECTION NAVBAR START ------------------------------->
    <section class="navbar">
      <nav class="navbar navbar-dark navbar-expand-lg py-md-3 fixed-top px-lg-2">
        <div class="container">
          <!--LEFT NAVBAR -->
          <a href="index.html" class="navbar-brand" href="#"><img class="logo_brand" width="200" height="90" src="./asset/images/brand.png" alt="navbar--logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-md-1 gap-lg-3">
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link active page-scroll" aria-current="page" href="#home">Program</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link page-scroll" href="#">Alumni</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link page-scroll" href="#">Prestasi</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link page-scroll" href="#">Kegiatan</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="nav-link page-scroll" href="#">Mitra</a>
              </li>
            </ul>
            <!--RIGHT NAVBAR -->
            <form class="d-flex">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              </form>
            </form>
            <div class="btn-group">
              <img class="btn-flag btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" src="./asset/images/indonesia.png" alt="" />

              <ul class="dropdown-menu bg-transparent border-0">
                <li>
                  <img class="btn-flag btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" src="./asset/images/english.jpg" />
                </li>
              </ul>
            </div>
          </div>
          <nav role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
              <!-- HAMBURGER ICON -->
              <span></span>
              <span></span>
              <span></span>
              <!-- HAMBURGER ICON -->
              <ul id="menu">
                <div class="menu_kanan d-block d-md-block d-lg-none">
                  <!-- <li>
                        <div class="btn-group">
                          <img class="btn-flag btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="./asset/images/indonesia.png">
                          </img>
                          <ul class="dropdown-menu">
                            <img class="btn-flag btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" src="./asset/images/konten/english.jpg">
                          </ul>
                        </div>
                      </li> -->
                  <a href="#"><li>Program</li></a>
                  <a href="#"><li>Alumni</li></a>
                  <a href="#"><li>Prestasi</li></a>
                  <a href="#"><li>Kegiatan</li></a>
                  <a href="#"><li>Mitra</li></a>
                </div>
                <a href="#"><li>Tentang Kami</li></a>
                <a href="#"><li>Melihat Indonesia</li></a>
                <a href="#"><li>EADC</li></a>
                <a href="#"><li>Media Sosial</li></a>
                <a href="#"><li>Kontak</li></a>
                <a href="#"><li>Galeri</li></a>
                <!-- <a href="#">
                  <li style="border-bottom: 2px solid white"></li>
                </a> -->
                <a href="#"><li>Pendaftaran</li></a>
                <!-- <a href="#">
                  <li></li>
                </a>
                <a href="#">
                  <li></li>
                </a>
                <a href="#">
                  <li></li>
                </a> -->
              </ul>
            </div>
          </nav>
        </div>
      </nav>
    </section>
    <!-- SECTION NAVBAR END -->
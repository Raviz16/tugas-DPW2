<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Sayur Bunda </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{('public')}}/css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="{{('public')}}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="{{('public')}}/https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{('public')}}/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{('public')}}/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{('public')}}/index.html">
            <span>
              Sayur Bunda
            </span>
          </a>
          <div class="" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="User_option">
                    <li class="">
                      <a class="" href="">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>
                    </li>
                    <form class="form-inline ">
                      <button class="btn   nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{('public')}}/index.html">HOME</a>
                <a href="{{('public')}}/about.html">ABOUT</a>
                <a href="{{('public')}}/vegetables.html">VEGETABLES</a>
                <a href="{{('public')}}/contact.html">CONTACT US</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      01
                    </h5>
                    <h1>
                      Sayur <br />
                      Segar
                    </h1>
                    <a href="" class="">
                      Beli Sekarang
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      02
                    </h5>
                    <h1>
                      Buah <br />
                      Segar
                    </h1>
                    <a href="" class="">
                      Beli Sekarang
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- veg section -->

  <section class="veg_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Beragam Sayur-sayuran
        </h2>
        <p>
          Sayur-sayuran Segar di tanam langsung oleh petani handal dijamin berkualitas dan higienis
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p1.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Tomat
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 10.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p2.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Terong
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 8.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p3.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Labu
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 7.000/Buah
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p4.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Kentang
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 12.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p5.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Paprika
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 6.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p6.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Kubis
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 18.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p7.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Sawi
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 15.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p8.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Kubis ungu
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 18.000/kilo
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{('public')}}/images/p9.png" alt="">
            </div>
            <div class="detail-box">
              <a href="">
                Labu air
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rp</span> 3.000/Buah
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Lihat Disini
        </a>
      </div>
    </div>
  </section>

  <!-- end veg section -->

  <!-- about section -->

  <section class="about_section ">
    <div class="about_bg_box">
      <img src="{{('public')}}/images/about-bg.jpg" alt="">
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 ml-auto ">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Kami Menyediakan <br>
                Sayuran Segar
              </h2>
            </div>
            <p>
              Jangan Ragu dengan ke segaran sayur kami karena di sayur bunda kami sangat menjaga kualitas dan ke higienisan sayur Bunda.
            </p>
            <a href="" class="mt_20">
              Lihat Sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          hubungi <span>Kami</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  MENGIRIM
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="{{('public')}}/googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Apa Kata Pelanggan Kami
        </h2>
      </div>
      <div class="col-md-9 col-lg-7 mx-auto px-0">
        <div class="box">
          <div class="b-1">
            <div class="client_id">
              <div class="img-box">
                <img src="{{('public')}}/images/client-1.jpg" alt="">
              </div>
              <div class="name">
                <h5>
                  Bunda Maya
                </h5>
                <h6>
                  Ibu Rumah Tangga
                </h6>
              </div>
            </div>
          </div>
          <div class="client_detail">
            <p>
              wah Sayur-sayuran di sayur bunda sangat berkualitas jadi jangan ragu ya belanja di sini 
            </p>
          </div>
        </div>
        <div class="box">
          <div class="client_id">
            <div class="img-box">
              <img src="images/client-2.jpg" alt="">
            </div>
            <div class="name">
              <h5>
                Bunda Helen
              </h5>
              <h6>
                Ibu Rumah Tangga
              </h6>
            </div>
          </div>
          <div class="client_detail">
            <p>
              wah segar sekali sayur di sayur bunda karena sayur bunda di tanam dengan kualitas tanah terbaik
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Lihat lebih banyak
        </a>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <div class="row ">
        <div class="col-sm-6 col-md-4 col-lg-3 footer-col">
          <div class="footer_detail">
            <a href="{{('public')}}/index.html">
              <h4>
                Sayur Bunda
              </h4>
            </a>
            <p>
              Jangan Lupa Belanja di Sayur Bunda ya Karena dijamin tidak akan kecewa dengan kualitas kami
            </p>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mx-auto footer-col">
          <h4>
            Hubungi Kami
          </h4>
          <p>
            bisa hubungi kami dengan nomor dan alamat yang tertera
          </p>
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Jln. Simpang 2 Muara Tanjung 
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : 089612342323
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : Sayurbunda@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_form">
            <h4>
              daftar ke Andmin Kami
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
               Berlangganan
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="{{('public')}}/https://html.design/">Sayur Bunda</a>
        </p>
      </div>
    </div>
  </section>
  <!-- end  footer section -->

  <script type="text/javascript" src="{{('public')}}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{('public')}}/js/bootstrap.js"></script>
  <script type="text/javascript" src="{{('public')}}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="{{('public')}}/https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Code</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo1.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                        <button class="dropbtn">Products</button>
                           <div class="dropdown-content">
                              <a class="nav-link" href="<?= base_url('manufacture')?>">Manufacture</a>
                              <a class="nav-link" href="<?= base_url('systemin')?>">System Integrator</a>
                              <a class="nav-link" href="<?= base_url('digital')?>">Digital</a>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="<?= base_url('/kumpulan')?>">Download</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo1.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <!-- <li class="active"><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li> -->
                     <!-- <li><a href="<?= base_url('news') ?>">Products</a></li>  -->
                     <div class="dropdown">
                        <li><button class="dropbtn">Products</button></li>
                           <div class="dropdown-content">
                              <a href="<?= base_url('manufacture') ?>">Manufacture</a>
                              <a href="<?= base_url('systemin') ?>">System Integrator</a>
                              <a href="<?= base_url('digital') ?>">Digital</a>
                           </div>
                           </div>
                     <li><a href="<?= base_url('/kumpulan')?>">Download</a></li> 
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <!-- <div class="banner_section layout_padding"> -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <!-- <h1 class="banner_taital">Code</h1>
                        <p class="banner_text">A lot of products we have. So check it out</p> -->
                        <!-- <div class="read_bt"><a href="#">Get A Quote</a></div> -->
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         <!-- </div> -->
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Our Products </h1>
            <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p> -->
            <div class="services_section_2">
               <div class="row g-md-8 justify-content-center align-items-center">
                  <div class="col-md-4">
                     <div><img src="images/INTIBOOK-1.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Manufacture</a></div>
                  </div>
               </div>
               <div class="row gy-md-5"></div>
               <div class="row justify-content-center align-items-center">
                  <div class="col-md-4">
                     <div><img src="images/INTI-CPTZ-Type-2.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">System Integrator</a></div>
                  </div>
                  <!-- <div class="col-md-2"></div> -->
                  <div class="col-md-4">
                     <div><img src="images/INTI-CROMEBOOK-1.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Digital</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <!-- <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- about section end -->
      <!-- blog section start -->
      <!-- <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">See Our  Video</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div> -->
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">About us</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Fokus pada proses produksi atau konversi bahan baku, bahan setengah jadi, komponen, atau bagian lain menjadi barang jadi dengan nilai tambah yang memenuhi spesifikasi standar.PT INTI (Persero) menjalankan lini bisnis ini dengan membuat Kabel Serat Optik, Smart Energy Devices, dan Tabung Liquid Petroleum Gas (LPG) Composite. Perusahaan juga merakit perangkat cerdas untuk lini produk Broadband dan Smart Energy, kartu cerdas, dan genuine product.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <!-- <div class="client_img"><img src="images/client-img.png"></div> -->
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <!-- <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Fokus pada pemenuhan perangkat keras, perangkat lunak, dan solusi jaringan untuk perusahaan konsumen, mengkhususkan diri dalam menyatukan subsistem komponen menjadi satu, serta memastikan bahwa subsistem tersebut berfungsi secara terintegrasi.System Integrator umumnya bekerja di sekitar solusi perangkat lunak yang dibangun sebelumnya dan dapat diintegrasikan dalam organisasi dengan kustomisasi minimal, mengatur siklus hidup pengembangan ke operasi, dari solusi yang kompleks.PT INTI (Persero) menjalankan lini bisnis ini dengan menyediakan Penyebaran Serat Optik seperti Out Site Plan or Fiber to the Home, Pengembangan Penerangan Jalan Umum dan Pembangkit Listrik Tenaga Surya, dan Automatic Dependent Surveillance-Broadcast (ADS-B).</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <!-- <div class="client_img"><img src="images/client-img.png"></div> -->
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <!-- <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Fokus pada penyediaan produk dan layanan berdasarkan inovasi layanan digital untuk menjawab kebutuhan bisnis untuk memudahkan otomatisasi dalam organisasi perusahaan konsumen. Solusi ini dikirimkan melalui internet atau jaringan elektronik, terotomatisasi dan hanya membutuhkan sedikit intervensi manusia.PT INTI (Persero) menjalankan lini bisnis ini dengan menyediakan Business to Business Commerce SIPLah, Smart Hospital Management System, Big Data Analytic, Internet of Things, Cyber Defence, dan Sistem Pemerintahan Berbasis Elektronik.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <!-- <div class="client_img"><img src="images/client-img.png"></div> -->
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <!-- <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <!-- <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Let Start Talk with Us</h1>
               <div class="getquote_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div> -->
      <!-- choose section end -->
      <!-- footer section start -->
      <!-- <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="images/call-icon.png"></div>
               <div class="call_text"><a href="#">Call +01 1234567890</a></div>
               <div class="call_text"><img src="images/mail-icon.png"></div>
               <div class="call_text"><a href="#">demo@gmail.com</a></div>
            </div>
         </div>
      </div> -->
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
         <div class="logo"><img src="images/logo1.png"></a></div>
         <div class="services_section_2">
               <div class="row g-md-8 justify-content-center align-items-center">
                  <div class="col-md-4">
                     <p class="copyright_text"> Jl. Moch. Toha No. 77 Bandung 40253
                                                Phone : (+62-22) 5201501
                                                Fax : (+62-22) 5202444
                                                E-mail : info@inti.co.id</p>
                  </div>
         <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>
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
                           <a class="nav-link " href="<?= base_url('/welcome_message')?>">Home</a>
                        </li>  
                        <button class="dropbtn">Products</button>
                           <div class="dropdown-content">
                              <a class="nav-link" href="<?= base_url('manufacture')?>">Manufacture</a>
                              <a class="nav-link" href="<?= base_url('system')?>">System Integrator</a>
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
                     <li><a href="<?= base_url('/')?>">Home</a></li>
                        <div class="dropdown">
                        <li><button class="dropbtn">Products</button></li>
                           <div class="dropdown-content">
                              <a href="<?= base_url('manufacture') ?>">Manufacture</a>
                              <a href="<?= base_url('system') ?>">System Integrator</a>
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
            <h1 class="services_taital">Cyber Security</h1>
            <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p> -->
            <div class="services_section_2">
               <div class="row g-md-8 justify-content">
                  <div class="col-md-4">
                     <div><img src="images/Content-Filtering.png" class="services_img"></div>
                    </div>
                     <div class="col-md-4">
                        <p class="services_text">Cyber Security adalah praktik keamanan komputer, server, perangkat seluler, sistem elektronik, jaringan, dan data dari serangan jahat. Ini juga dikenal sebagai keamanan teknologi informasi atau keamanan informasi elektronik. Istilah ini berlaku dalam berbagai konteks, dari bisnis ke komputasi mobile, dan dapat dibagi menjadi beberapa kategori umum.</p>
                        <p class="services_text">Proyek yang mengadopsi sistem Keamanan Dunia Maya meliputi Penyaringan Konten dan Sistem Manajemen Senjata INTI.</p>

                        <strong>CONTENT FILTERING</strong>
                        <p class="services_text">Content Filtering adalah sebuah solusi yang terdiri dari sistem pemantauan proaktif & sistem pusat kendali.</p>
                        <p class="services_text">Sistem pemantauan proaktif terdiri dari perangkat lunak yang berfungsi untuk melakukan penelusuran, pengambilan, pencacahan, serta penggalian dan analisis terhadap berbagai jenis publik konten yang ada di Internet. Keluaran perangkat lunak tersebut akan menjadi basis bagi proses pemantauan proaktif secara berkelanjutan, serta untuk melakukan tindakan penanganan, baik secara teknologi, administrasi, maupun penegakan peraturan perundangan yang ada.</p>
                        <p class="services_text">Sedangkan sistem pusat kendali merupakan tempat dimana tim management dan tim kendali melakukan koordinasi, mengambil keputusan, dan memberikan perintah-perintah terkait dengan pengoperasian sistem yang dimonitor. Pengambilan tindakan tidak terbatas pada saat terjadinya insiden terkait sistem, tetapi juga untuk melakukan tindakan-tindakan lain yang dianggap perlu seperti pemutakhiran sistem, monitoring, dan lainnya. Tujuan dari pusat kendali ini adalah untuk mengumpulkan dan memproses semua informasi yang dibutuhkan untuk menangani insiden secara cepat dan efektif.</p>
                        <p class="services_text">Portofolio Bisnis : Pengadaan Pemantauan Proaktif & Pusat Kendali (Content Filtering) di Kominfo.</p>

                        <b>I-WMS (INTI WEAPON MANAGEMENT SYSTEM)</b>
                        <p class="services_text">i-WMS (INTI Weapon Management System) adalah sebuah sistem yang terdiri dari RFID Tag dan RFID Reader dimana RFID Tag ditanam di bagian senjata secara permanen dan tidak mudah dilepas yang berfungsi sebagai identitas senjata dan dapat dibaca oleh Reader dengan menggunakan teknologi gelombang Radio (RF), kemudian data identitas hasil pembacaan tersebut diolah oleh sistem aplikasi sehingga menghasilkan informasi yang sesuai dengan keinginan pengguna.</p>
                        
                        </div>
                  <div class="col-md-2"></div>

                  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->
<button class="btn"><i class="fa fa-download"></i> Download</button>

<!-- Full width -->
<button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button>
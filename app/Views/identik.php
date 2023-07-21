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
            <h1 class="services_taital">Identik DL02 </h1>
            <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p> -->
            <div class="services_section_2">
               <div class="row g-md-8 justify-content">
                  <div class="col-md-4">
                     <div><img src="images/Identik-DL02-1.png" class="services_img"></div>
                    </div>
                     <div class="col-md-4">
                        <p class="services_text">Identik DL02 merupakan perangkat pembaca Kartu Tanda Penduduk Elektronik (KTP-el) dengan layar yang masing-masing komponennya terintegrasi dalam satu kesatuan sehingga dapat digunakan secara mandiri tanpa harus terhubung dengan perangkat komputer. Perangkat Identik DL02 dapat di integrasikan dengan sistem eksisting lainnya yang memanfaatkan jaringan ethernet dengan kabel LAN sebagai konektifitasnya.

                        Perangkat Identik DL02 dapat membaca dan menampilkan data KTP-el secara offline karena menggunakan SAM (Secure Access Module) Card dari Dukcapil. Data yang ditampilkan merupakan semua komponen yang terdapat dalam KTP-el seperti biodata, pas foto, dan tanda tangan. Perangkat Identik DL02 dibuat sesuai dengan Peraturan Menteri Dalam Negeri RI No. 76 Tahun 2020 tentang “Perangkat Pembaca Kartu Tanda Penduduk Elektronik”. Solusi penggunaan perangkat Identik DL02 ini dapat di implementasikan dalam banyak hal, seperti: Validasi Kependudukan, Buku Tamu, Registrasi Pelanggan (Bank, Rumah Sakit, Penyedia Layanan Telekomunikasi, Layanan Transportasi, dll), E-voting, Absensi dan lain sebagainya.</p>
                        </div>
                  <div class="col-md-2"></div>

                  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->
<button class="btn"><i class="fa fa-download"></i> Download</button>

<!-- Full width -->
<button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button>
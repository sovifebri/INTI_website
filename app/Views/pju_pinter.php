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
            <h1 class="services_taital">PJU PINTER </h1>
            <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p> -->
            <div class="services_section_2">
               <div class="row g-md-8 justify-content">
                  <div class="col-md-4">
                     <div><img src="images/PJU-Pinter-2.png" class="services_img"></div>
                    </div>
                     <div class="col-md-4">
                        <p class="services_text">PJU PinTeR (Penerangan Jalan Umum dengan Pengendalian dan Monitoring Terpusat) merupakan solusi cerdas berupa Lighting Automation and Controlling System pada fasilitas penerangan/pencahayaan yang mampu menghemat penggunaan energi dan biaya pemeliharaan 50-75% serta memudahkan pemeliharaan dan meningkatkan performansinya, dengan menggunakan metode INTI’s L4MP® (Lighting Measuring, Monitoring, Managing to Maintain the Performance). PJU PinTeR berbasis teknologi ICT terkini yang sangat berguna dalam pengelolaan dan pemeliharaan pencahayaan pada fasilitas Penerangan Jalan Umum (PJU)/street lighting. Selain itu juga sangat sejalan dengan program efisiensi energi dalam konsumsi listrik dan rencana aksi nasional dan daerah dalam pengurangan emisi gas rumah kaca (CO2).</p>
                        </div>
                  <div class="col-md-2"></div>
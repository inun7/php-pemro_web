<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php';

$key = '';
$get_data = tampil('data', $key);
 ?>

 <!DOCTYPE html>
 <html lang="en">

     <!-- Basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Site Metas -->
     <title>Covid-19 Prevention System</title>
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">

     <!-- Site Icons -->
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
     <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Site CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- ALL VERSION CSS -->
     <link rel="stylesheet" href="css/versions.css">
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/custom.css">

     <!-- Modernizer for Portfolio -->
     <script src="js/modernizer.js"></script>

     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

 </head>
 <body class="host_version">


     <!-- LOADER -->
 	<div id="preloader">
 		<div class="loader-container">
 			<div class="progress-br float shadow">
 				<div class="progress__item"></div>
 			</div>
 		</div>
 	</div>
 	<!-- END LOADER -->


   <!-- Start header -->
   <header class="top-navbar">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="container-fluid">
         <a class="navbar-brand" href="index.php">
           <img src="images/logo.png" alt="" />
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
           <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbars-host">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link" href="adminDashboard.php">Beranda</a></li>
             <li class="nav-item"><a class="nav-link" href="adminBerita.php">Berita</a></li>
             <li class="nav-item active"><a class="nav-link" href="adminData.php">Data</a></li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
               <div class="dropdown-menu" aria-labelledby="dropdown-a">
                 <a class="dropdown-item" href="adminKontak.php">Kontak</a>
                 <a class="dropdown-item" href="adminTentang.php">Tentang</a>
                 <a class="dropdown-item" href="adminPanduan.php">Panduan</a>
               </div>
             </li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a class="hover-btn-new log orange" href="index.php" data-target="#login"
                    onclick="return confirm('Keluar?')"><span>Logout</span></a></li>
           </ul>
         </div>
       </div>
     </nav>
   </header>
   <!-- End header -->


 	<div class="all-title-box">
 		<div class="container text-center">
 			<h1>Data<span class="m_1">Data Statistik Penyebaran Covid-19 di Kabupaten Jember</span></h1>
 		</div>
 	</div>

 <!-- Logika Tampil dan Tambah Data -->
   <center>
     <div id="overviews" class="section wb">
       <a href="addData.php"> <input type="button" class="btn btn-primary" value="Tambah Data"> </a>
       <br> <br>
       <table class="table" width='25%' border=1>
         <thead class="thead-dark">
             <tr>
                 <th scope="col" width="3%">No.</th>
                 <th scope="col">Kecamatan</th>
                 <th scope="col">Positif</th>
                 <th scope="col">PDP</th>
                 <th scope="col">ODP</th>
                 <th scope="col" width="13%">Aksi</th>
             </tr>
         </thead>
         <tbody>
           <?php
           $no = 1;
             while ($data = mysqli_fetch_array($get_data)) {
               ?>
                 <tr>
                     <th scope="row" class="text-center"><?= $no; ?></th>
                     <td><?= $data['kecamatan'] ?></td>
                     <td><?= $data['positif'] ?></td>
                     <td><?= $data['pdp'] ?></td>
                     <td><?= $data['odp'] ?></td>
                     <td> <a href="editData.php?id=<?= $data['idData']?>">
                            <input type="button" class="btn btn-warning" value="Edit"> </a> |
                          <a href="deleteData.php?id=<?= $data['idData']?>" onclick="return confirm('Hapus data ini?')">
                            <input type="button" class="btn btn-danger" value="Delete"> </a>
                     </td>
                 </tr>
                 <?php
                 $no++;
               }
              ?>
         </tbody>
       </table>
     </div>
   </center>
 <!-- end section -->


 <footer class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-xs-12">
                 <div class="widget clearfix">
                     <div class="widget-title">
                         <h3>Tentang Kami</h3>
                     </div>
                     <p> Website ini dibangun untuk membantu Pemerintah Kabupaten Jember dalam menyalurkan informasi
                       seputar Covid-19 kepada Masyarakat. </p>
         <div class="footer-right">
           <ul class="footer-links-soi">
             <li><a href="https://github.com/inun7"><i class="fa fa-github"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
           </ul><!-- end links -->
         </div>
                 </div><!-- end clearfix -->
             </div><!-- end col -->

     <div class="col-lg-4 col-md-4 col-xs-12">
                 <div class="widget clearfix">
                     <div class="widget-title">
                         <h3>Daftar Link</h3>
                     </div>
                     <ul class="footer-links">
                         <li><a href="#">Beranda</a></li>
                         <li><a href="berita.php">Berita</a></li>
                         <li><a href="data.php">Data</a></li>
                         <li><a href="kontak.php">Kontak</a></li>
                         <li><a href="tentang.php">Tentang</a></li>
                         <li><a href="panduan.php">Panduan</a></li>
                     </ul><!-- end links -->
                 </div><!-- end clearfix -->
             </div><!-- end col -->

             <div class="col-lg-4 col-md-4 col-xs-12">
                 <div class="widget clearfix">
                     <div class="widget-title">
                         <h3>Kontak Kami</h3>
                     </div>

                     <ul class="footer-links">
                         <li><a href="mailto:#">sultonainunnazib@gmail.com</a></li>
                         <li><a href="#">www.covid19.com</a></li>
                         <li>Jember, East Java - Indonesian</li>
                         <li>+62 3 8376 6284</li>
                     </ul><!-- end links -->
                 </div><!-- end clearfix -->
             </div><!-- end col -->

         </div><!-- end row -->
     </div><!-- end container -->
 </footer><!-- end footer -->


     <div class="copyrights">
         <div class="container">
             <div class="footer-distributed">
                 <div class="footer-center">
                     <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Covid-19</a> Design By : <a href="bit.ly/inunBiography">Kelompok 18 (Sulton Ainun Nazib - Mad Ikhsan)</a></p>
                 </div>
             </div>
         </div><!-- end container -->
     </div><!-- end copyrights -->


     <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

     <!-- ALL JS FILES -->
     <script src="js/all.js"></script>
     <!-- ALL PLUGINS -->
     <script src="js/custom.js"></script>

 </body>
 </html>

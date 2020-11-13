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

  <?php
  include_once("config.php");

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "<script>alert('Login gagal! Username dan Password salah!');history.go(-1);</script>";
    }elseif ($_GET['pesan'] == "logout") {
      echo "<script>alert('Anda berhasil logout.')</script>";
    }elseif ($_GET['pesan'] == "belum_login") {
      echo "<script>alert('Anda harus login untuk mengakses halaman admin!')</script>";
    }
  }
   ?>

  <!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Admin Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form method="post" action="cekLogin.php" role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="username" id="username" placeholder="Masukan Username" type="text" style="color: black">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="password" id="password" placeholder="Masukan Password" type="password" style="color: black">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Login
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
<!-- end session -->


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
						<li class="nav-item active"><a class="nav-link" href="index.php">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
            <li class="nav-item"><a class="nav-link" href="data.php">Data</a></li>
            <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="dropdown-kontak.php">Kontak</a>
								<a class="dropdown-item" href="dropdown-tentang.php">Tentang</a>
								<a class="dropdown-item" href="dropdown-panduan.php">Panduan</a>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Admin</span></a></li>
          </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Covid-19 </strong> Prevention System</h2>
										<p class="lead">Selamat datang di Website kami, update pengetahuan tentang covid-19 anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->


			</div>
			<div class="carousel-item">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Covid-19 <strong>Prevention System</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Selamat datang di Website kami, update pengetahuan tentang covid-19 anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="Beranda" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><h2><strong>Covid-19 </strong> Prevention System</h2>
										<p class="lead">Selamat datang di Website kami, update pengetahuan tentang covid-19 anda disini. </p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

    <div id="overviews" class="section wb">
        <div class="container">
          <!-- <div class="section-title row text-center">
              <div class="col-md-8 offset-md-2">
                  <h3>COVID-19 Prevention System</h3>
              </div>
          </div> -->
          <!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                      <h2> Apa itu coronavirus? </h2>
                      <p class="lead" style="color: black;" align="justify">
                        Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia.
                        Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek
                        hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).
                        Coronavirus jenis baru yang ditemukan menyebabkan penyakit COVID-19.
                      </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                      <h2> Apa itu Covid-19? </h2>
                      <p class="lead" style="color: black;" align="justify">
                        COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.
                        Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok,
                        bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi
                        di banyak negara di seluruh dunia.
                      </p>
                      <br> <br>
                    </div><!-- end messagebox -->
                </div><!-- end col -->


				       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                      <h2> Apa saja gejalanya? </h2>
                      <p class="lead" style="color: black;" align="justify">
                        1. Napas Pendek <br>
                        2. Demam <br>
                        3. Batuk Kering <br>
                        4. Menggigil dan sakit di sekujur tubuh <br>
                        5. Masalah pencernaan <br>
                        6. Mata merah muda <br>
                        7. Kelelahan <br>
                        8. Sakit kepala, sakit tenggorokan, hidung tersumbat.
                      </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="message-box">
                       <h2> Bagaimana pencegahannya? </h2>
                       <p class="lead" style="color: black;" align="justify">
                         1. Sering mencuci tangan <br>
                         2. Menjaga jarak (Social Distancing) <br>
                         3. Tidak sering menyentuh wajah <br>
                         4. Mempraktikkan etika bersin dan batuk <br>
                         5. Memakai masker <br>
                         6. Membersihkan permukaan barang yang sering disentuh <br>
                         7. Segera ke dokter jika mengalami gejalan <br>
                         8. Di rumah saja
                       </p>
                     </div><!-- end messagebox -->
                 </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Rekam Jejak Coronavirus di Indonesia</h3>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>Maret</h2>
								<p> 1.528 Kasus Terkonfirmasi </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>April</h2>
								<p> 10.118 Kasus Terkonfirmasi </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>Mei</h2>
								<p> 26.473 Kasus Terkonfirmasi </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>Juni</h2>
								<p> 26.940 Kasus Terkonfirmasi </p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>Juli</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>Agustus</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>September</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>Oktober</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



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
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>

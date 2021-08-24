<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" id="bootstrap-css">
		
		<title>Karirpad Test</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#page-top"><img width="120px" src="<?php echo base_url('assets/img/template/logo.png')?>" /></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="page-scroll">
							<a href="#">Pencari Kerja</a>
						</li>
						<li class="page-scroll">
							<a style="color: #fe046d" href="#">Daftar</a>
						</li>
						<li class="page-scroll">
							<a href="<?= site_url('Login')?>">Masuk</a>
						</li>
						<li class="page-scroll">
							<a href="#"><span class="badge badge-blue"> Perusahaan</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<header>
			<section id="header-image">
				<div class="section-content">
					<h1 class="section-header"> <span class="content-header"> Cari Kerja <strong>Jauh lebih Mudah</strong></span> </h1>
				</div>
				<div class="header-section">
					<div class="container">
						<form class="form-inline form-line">	
							<div>
								<div class="form-group"> 
									<input type="text" style="width: 400px" class="form-control" placeholder="Cari Posisi atau Perusahaan">
								</div>
								<div class="form-group"> 
									<input type="text" class="form-control" placeholder="Lokasi">
								</div>
								<div class="form-group"	>
									<button type="button" class="btn btn-primary"> Cari</button>
								</div>
							</div>
						</form>
						<h5 class="section-footer"> <span class="content-footer"> Tersedia ribuan lowongan pekerjaan untuk Kamu saat ini. Lihat lowongan di sini</span> </h5>
					</div>
				</div>
			</section>
		</header>
		<div class="content-body-container bg-grey">
			<div class="row">
				<div class="col-md-12">
					<div class="header-text">
						<p class="text-center text-header">Lowongan pilihan untuk kamu</p>
						<p class="text-center text-description">Buruan lamar lowongannya, biar kamu cepet dapet kerja</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="cardheader">

						</div>
						<div class="avatar">
							<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>SITAC PREMIT (Perijinan)</p>
							</div>
							<div class="desc"><strong>PT Cipta Karya Komputer</strong></div>
							<div class="desc">Penempatan Tangerang Banten</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-grey"> Lamar Sekarang</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="cardheader">

						</div>
						<div class="avatar">
							<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>SITAC PREMIT (Perijinan)</p>
							</div>
							<div class="desc"><strong>PT Cipta Karya Komputer</strong></div>
							<div class="desc">Penempatan Tangerang Banten</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-grey"> Lamar Sekarang</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="cardheader">

						</div>
						<div class="avatar">
							<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>SITAC PREMIT (Perijinan)</p>
							</div>
							<div class="desc"><strong>PT Cipta Karya Komputer</strong></div>
							<div class="desc">Penempatan Tangerang Banten</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-grey"> Lamar Sekarang</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="cardheader">

						</div>
						<div class="avatar">
							<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>SITAC PREMIT (Perijinan)</p>
							</div>
							<div class="desc"><strong>PT Cipta Karya Komputer</strong></div>
							<div class="desc">Penempatan Tangerang Banten</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-grey"> Lamar Sekarang</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-body-container-fungsi bg-white">
			<div class="row">
				<div class="col-md-12">
					<div class="header-text">
						<p class="text-center text-header">Fungsi Pekerjaan Terpopuler</p>
						<p class="text-center text-description">Penasaran kan lowongan yang terpopuler saat ini? Cek lowongan di bawah ini :</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="card-new">
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="card-new">
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Pemasaran</strong></div>
								</div>
								<div class="desc"><strong>300 Lowongan Tersedia</strong></div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Lihat Semua</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body-container bg-grey">
			<div class="row">
				<div class="col-md-12">
					<div class="header-text">
						<p class="text-center text-header">Kriteria Lowongan Pilihan Untuk Kamu</p>
						<p class="text-center text-description">Dibawah ini beberapa kriteria yang mungkin cocok untuk Kamu. Silahkan pilih kriterianya ya!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="gambar-logo-br">
								<img alt="" src="<?php echo base_url('assets/img/template/bg-kerja.jpg')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>Fresh Graduate</p>
							</div>
							<div class="desc">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-blue"> Lihat Lowongan</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="gambar-logo-br">
								<img alt="" src="<?php echo base_url('assets/img/template/bg-kerja.jpg')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>Fresh Graduate</p>
							</div>
							<div class="desc">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-blue"> Lihat Lowongan</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="gambar-logo-br">
								<img alt="" src="<?php echo base_url('assets/img/template/bg-kerja.jpg')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>Fresh Graduate</p>
							</div>
							<div class="desc">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-blue"> Lihat Lowongan</span></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card hovercard">
						<div class="gambar-logo-br">
								<img alt="" src="<?php echo base_url('assets/img/template/bg-kerja.jpg')?>">
						</div>
						<div class="info">
							<div class="title">
								<p>Fresh Graduate</p>
							</div>
							<div class="desc">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir</div>
						</div>
						<div class="bottom">
							<a href="#"><span class="badge badge-blue"> Lihat Lowongan</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body-container-fungsi bg-white">
			<div class="row">
				<div class="col-md-12">
					<div class="header-text">
						<p class="text-center text-header">Apa yang dibutuhkan perusahaan untuk mendapatkan talenta berbakat?</p>
						<p class="text-center text-description-new">Kami memberi solusi</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="card-new">
					<div class="col-lg-6 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Applicant Tracking System as Large Enterprise Solutions</strong></div>
								</div>
								<div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Read More</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="card hovercard card-left">
							<div class="gambar-logo">
								<img alt="" src="<?php echo base_url('assets/img/template/logo-google.png')?>">
							</div>
							<div class="info">
								<div class="title">
									<div class="desc-title"><strong>Applicant Tracking System as Large Enterprise Solutions</strong></div>
								</div>
								<div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
							</div>
							<div class="bottom">
								<a href="#"><span class="badge badge-pink"> Read More</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body-container-fungsi-br bg-dark-grey">
			<div class="row">
				<div class="col-md-12">
					<div class="header-text">
						<p class="text-center text-header-white">Customer Service</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="card-new">
					<div class="col-lg-6 col-sm-6">
						<div class="header-right-title">
							<p class="text-right text-header-desc">Untuk Pencari Kerja</p>
							<p class="text-right text-header-desc-grey">Email: email@gmail.com Whatsapp: +62999999999</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="header-text-title">
							<p class="text-left text-header-desc">Untuk Perusahaan</p>
							<p class="text-left text-header-desc-grey">Email: email@gmail.com Whatsapp: +62999999999</p>
						</div>
					</div>
				</div>
			</div>
			<hr class="hr">
			<div class="row">
				<div class="card-new">
					<div class="col-lg-4 col-sm-4">
						<div class="header-right-title">
							<p class="text-left text-header-desc">Pencari Kerja</p>
							<p>
								<a href="#" class="text-header-desc-grey">Testimoni Pencari Kerja</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Karir</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Media Partner</a>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="header-text-title">
							<p class="text-left text-header-desc">Perusahaan</p>
							<p>
								<a href="#" class="text-header-desc-grey">Applicant Tracking System</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Recruitement Management System</a>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="header-text-title">
							<p class="text-left text-header-desc">Lainnya</p>
							<p>
								<a href="#" class="text-header-desc-grey">Tentang Karirpad</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Kontak Kami</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Syarat & Ketentuan</a>
							</p>
							<p>
								<a href="#" class="text-header-desc-grey">Kebijakan Privasi</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="card-new">
					<div class="col-lg-6 col-sm-4">
						<p class="text-left text-header-desc">Ikuti Kami</p>
						<div class="glyphicon-ring"> 
							<span class="glyphicon glyphicon-envelope glyphicon-bordered"></span>
						</div>
						<div class="glyphicon-ring"> 
							<span class="glyphicon glyphicon-envelope glyphicon-bordered"></span>
						</div>
						<div class="glyphicon-ring"> 
							<span class="glyphicon glyphicon-envelope glyphicon-bordered"></span>
						</div>
						<div class="glyphicon-ring"> 
							<span class="glyphicon glyphicon-envelope glyphicon-bordered"></span>
						</div>
					</div>
					<div class="col-lg-6 col-sm-4">
						<p class="text-right text-header-desc">Download Aplikasi Karirpad</p>
						<p class="text-right text-header-desc"><img width="175px" src="<?php echo base_url('assets/img/template/logo-gplay.png')?>"></p>
					</div>
				</div>
			</div>

			<hr class="hr">
			<div class="row">
				<div class="card-footer">
					<div class="col-lg-12 col-sm-6">
						<div class="header-right-title">
							<p class="text-center text-header-desc">Copyright &copy; 2020 PT. Karir Pad Internasional - All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
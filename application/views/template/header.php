<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

		<title>Karirpad Test</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top bg-red">
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
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('nama_lengkap') ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a href="<?= site_url('Login/logout')?>">Logout</a></li>
                            </ul>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
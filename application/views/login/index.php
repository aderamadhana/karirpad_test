<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" id="bootstrap-css">
		
		<title>Karirpad Test</title>
	</head>
	<body>
        <div class="container">
            <?= $this->session->flashdata('messages') ?>
            <div class="row login">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default panel-login">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <div class="img-logo">
                                <img class="logo" src="<?php echo site_url('assets/img/template/logo.png')?>"/>
                            </div>
                            <form action="<?= site_url('Login/doLogin') ?>" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login to AESOFIS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>asset/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url()?>asset/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?= base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>asset/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>asset/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<!-- <div class="left"> -->
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?= base_url()?>asset/img/capture2.png" style="width: 100px; height:50px;"></a></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-login" action="<?=base_url('index.php/user/proses_login')?>" method="post">
		        <center><h2 class="form-login-heading">Login Now</h2></center>
		        <div class="login-wrap">
		            <center><input type="text" class="form-control" name="username" placeholder="Username" autofocus style="text-align: center; width: 75%;"></center>
		            <br>
		            <center><input type="password" class="form-control" name="password" placeholder="Password" autofocus style="text-align: center; width: 75%;"></center>
		           <br>
		            <center><input name="login" class="btn btn-theme btn-block" value="Masuk" type="submit" style="text-align: center; width: 75%;"></center>
		            <hr>
		          
		            <center><div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="<?=base_url('index.php/user/register')?>">
		                    Create an account
		                </a>
		            </div></center>
                    <?php
                if($this->session->flashdata('pesan')!= null){
                echo"<div class='alert alert-danger' style='width:300px'>".$this->session->flashdata('pesan')."</div";
                }?>
		        </div>
		      </form>	  	
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>

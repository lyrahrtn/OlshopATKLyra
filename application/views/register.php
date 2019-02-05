<!DOCTYPE html>
<html lang="en">
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

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?=base_url('index.php/user/simpan')?>" method="post" style="margin-top: 150px;">
		        <center><h2 class="form-login-heading">sign in now</h2></center>
		        <div class="login-wrap">
                    <center><input type="text" class="form-control" name="nama_user" placeholder="Nama Lengkap" autofocus style="text-align: center; width: 75%;"></center>
		            <br>
		           <center><input type="text" class="form-control" name="username" placeholder="Username" autofocus style="text-align: center; width: 75%;"></center>
		            <br>
		            <center><input type="password" class="form-control" name="password" placeholder="Password" style="text-align: center; width: 75%;"></center>
		            <br>
                   <center> <div class="row-center">
                        <input type="radio" value="kasir" name="level">Saya Menyetujui persyaratan sebagai Kasir
                    </div>
                    <div>
                        <input type="radio" value="admin" name="level">Saya Menyetujui Persyaratan sebagai Admin
                    </div>
                    <div>
                        <input type="radio" value="user" name="level">Saya Menyetujui Persyaratan sebagai User
                    </div></center>
                    <br>
		            <center><input name="daftar" class="btn btn-theme btn-block" value="Register" type="submit" style="text-align: center; width: 75%;"></center>
		            <hr>
		            
		            <center><div class="registration">
		                Already have an account yet?<br/>
		                <a class="" href="<?=base_url('index.php/user')?>">
		                    Login now !
		                </a>
		            </div></center>
		              <?php
                if($this->session->flashdata('pesan')!= null){
                echo"<div class='alert alert-success' style='width:300px'>".$this->session->flashdata('pesan')."</div";
                }?>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?=base_url()?>assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    session_start(); 
  include 'config.php';
  include '../Cloudinary/Cloudinary.php';
  include '../Cloudinary/Uploader.php';
  include '../Cloudinary/Api.php';
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Berbagi Ilmu</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/modal-login.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" >
    
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../datatables/js/jquery.dataTables.js"></script>

    <!-- Cloudinary -->
     <?php
         \Cloudinary::config(array( 
             "cloud_name" => "dzupaysdl", 
             "api_key" => "782957816277577", 
             "api_secret" => "DpgQ8pMe2Q9upM6d0bYowtsvG4U" 
         )); 
     ?>
     <!-- <link href="CLOUDINARY_URL=cloudinary://782957816277577:DpgQ8pMe2Q9upM6d0bYowtsvG4U@dzupaysdl" > -->


    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript">
      //  Script to Activate the Carousel 
        $('.carousel').carousel({
             interval: 5000 //changes the speed
        });
    </script>
    <style type="text/css">
        /* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 20;
  margin-top: 20px;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper .container {
  padding-left: 0;
  padding-right: 0;
}
.navbar-wrapper .navbar {
  padding-left: 15px;
  padding-right: 15px;
}

.navbar-content
{
    width:320px;
    padding: 15px;
    padding-bottom:0px;
}
.navbar-content:before, .navbar-content:after
{
    display: table;
    content: "";
    line-height: 0;
}
.navbar-nav.navbar-right:last-child {
margin-right: 15px !important;
}
.navbar-footer 
{
    background-color:#DDD;
}
.navbar-footer-content { padding:15px 15px 15px 15px; }
.dropdown-menu {
padding: 0px;
overflow: hidden;
}
    </style>

<!-- CSS Upload Foto -->
<style>
.fileupload {
    width: 100px;
    height: 100px;
    position: relative;
    overflow: hidden;
    background: ...; /* and other things to make it pretty */
}

.fileupload input {
    position: absolute;
    top: 0;
    right: 0; /* not left, because only the right part of the input seems to
                 be clickable in some browser I can't remember */
    cursor: pointer;
    opacity: 0.0;
    filter: alpha(opacity=0); /* and all the other old opacity stuff you
                                 want to support */
    font-size: 300px; /* wtf, but apparently the most reliable way to make
                         a large part of the input clickable in most browsers */
    height: 200px;
}
</style>

<script type="text/javascript">
function HandleBrowseClick(input_image)
{
    var fileinput = document.getElementById(input_image);
    fileinput.click();
}     
</script>

</head>

<body>

    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a href="index.php" class="navbar-brand">BerbagIlmu</a>            
			</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Buku <b class="caret"></b></a>
						<ul role="menu" class="dropdown-menu">
							<li><a href="cari.php?txt_cari=Agama">Agama</a></li>
							<li><a href="cari.php?txt_cari=Animasi dan Desain">Animasi dan Desain</a></li>
							<li><a href="cari.php?txt_cari=Bahasa dan Kamus">Bahasa dan Kamus</a></li>
							<!-- <li class="divider"></li> -->
							<li><a href="cari.php?txt_cari=Biografi">Biografi</a></li>
							<li><a href="cari.php?txt_cari=Buku Sekolah">Buku Sekolah</a></li>
                            <li><a href="#">Lainnya</a></li>
						</ul>
					</li>
				</ul>
				<form role="search" class="navbar-form navbar-left" method="post" action="cari.php">
					<div class="form-group">
						<input type="text" placeholder="Search" class="form-control" name="txt_cari">
					</div>
				</form>
                <?php
                if((empty($_SESSION['member_email']))AND(empty($_SESSION['admin_email'])))
                {
                ?>
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-times fa-fw"></i>
                    Hello, Guest
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                    <li>
                        <a href="login.php">
                        <i class="fa fa-sign-in fa-fw"></i>
                        Login
                        </a>
                    </li>
                    <li>
                        <a href="daftar.php">
                        <i class="fa fa-pencil fa-fw"></i>
                        Register
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
                <?php
                }
                    else
            
            if(!empty($_SESSION['member_email']))
             {
                $member_email = $_SESSION['member_email'];
                $query_validasi = mysqli_query($link,"SELECT * FROM member WHERE member_email = '$member_email'");
                $ambil = mysqli_fetch_assoc($query_validasi);
                extract($ambil);
                ?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="upload.php">Upload</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-times fa-fw"></i>
                    <?php echo ucwords($member_username); ?>
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                                           <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <form method="post" enctype="multipart/form-data" action="profil_change_foto.php">
                                                            <div class="fileupload">
                                                              <input type="hidden" name="member_id" class="form-control" value="<?php echo $member_id; ?>" />
                                                              <input type="hidden" name="member_email" class="form-control" value="<?php echo $member_email; ?>" />
                                                              <input onchange="document.getElementById('image-preview').src=window.URL.createObjectURL(this.files[0])" accept="image/jpeg,image/png" type="file" title="Click for change photo" name="member_foto" />
                                                                 <?php
                                                                 echo "<img src='foto/member/".$member_foto."' id='image-preview' alt='your foto' class='img-responsive' >";
                                                                 ?>
                                                            </div>
                                                            <p class="text-center small">
                                                                <input type="submit" value="Change Photo" class="btn btn-default btn-sm" size="20">
                                                            </form>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span><?php echo "$member_nama"?></span>
                                                            <p class="text-muted small">
                                                                <?php echo "$member_email" ?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="profil.php" class="btn btn-primary btn-sm active">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="password_baru.php" class="btn btn-default btn-sm">Change Passowrd</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="logout.php" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                      </ul>
                </li>
                </ul>
              <?php
              }
                    else
              
              if(!empty($_SESSION['admin_email']))
              {
                $admin_email = $_SESSION['admin_email'];
                $query_validasi = mysqli_query($link,"SELECT * FROM admin WHERE admin_email = '$admin_email'");
                $ambil = mysqli_fetch_assoc($query_validasi);
                extract($ambil);
                ?>
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-times fa-fw"></i>
                    List
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                    <li>
                        <a href="buku.php">
                        <i class="fa fa-book fa-fw"></i>
                        List Buku
                        </a>
                    </li>
                    <li>
                        <a href="member.php">
                        <i class="fa fa-task fa-fw"></i>
                        List Member
                        </a>
                    </li>
                    </ul>
                </li>
                <li><a href="upload.php">Upload</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-times fa-fw"></i>
                    <?php echo ucwords($admin_username); ?>
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                                           <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                           <form method="post" enctype="multipart/form-data" action="profil_change_foto.php">
                                                            <div class="fileupload">
                                                              <input type="hidden" name="admin_id" class="form-control" value="<?php echo $admin_id; ?>" />
                                                              <input type="hidden" name="admin_email" class="form-control" value="<?php echo $admin_email; ?>" />
                                                              <input onchange="document.getElementById('image-preview').src=window.URL.createObjectURL(this.files[0])" accept="image/jpeg,image/png" type="file" title="Click for change photo" name="admin_foto" />
                                                                 <?php
                                                                 echo "<img src='foto/admin/".$admin_foto."' id='image-preview' alt='your foto' class='img-responsive' >";                                
                                                                  ?>
                                                            </div>
                                                            <p class="text-center small">
                                                                <input type="submit" value="Change Photo" class="btn btn-default btn-sm" size="20">
                                                            </form>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span><?php echo "$admin_nama"?></span>
                                                            <p class="text-muted small">
                                                                <?php echo "$admin_email" ?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="profil.php" class="btn btn-primary btn-sm active">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="backup.php" class="btn btn-default btn-sm">Backup</a>
                                                                <a href="restore.php" class="btn btn-default btn-sm ">Restore</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="logout.php" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                      </ul>
                </li>
                </ul>
                <?php
              };
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>
    <!--/navbar-->      

 <!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <img class="img-circle" id="img_logo" src="icon.jpg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>

<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<script type='text/javascript'>alert('Login Gagal! Email atau Password Salah ')</script>";
        }
   }
?>        
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                    <!-- Begin # Login Form -->
                    <form action="login_act.php" method="post">
                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your Email and password.</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="member_email">
                            <input type="password" class="form-control" placeholder="Password" name="member_password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail.." required/>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required/>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required/>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required/>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
            <!-- End #modal content -->
        </div>
        <!-- End #modal dialog -->    
</div>
<!-- END # MODAL LOGIN -->

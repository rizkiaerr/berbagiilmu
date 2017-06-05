<?php
include "header.php";
//session_start();
if(!isset($_SESSION['member_email'])){ //LOGIN
  ?><script>
    window.alert("Harap Login!");
    window.location.href="login.php";
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Berbagiilmu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <style type="text/css">
  body{
    background-color:white;
  }
  a{
    color:#000;
  }
  .col-sm-8{
      border: 1px solid;
      border-color: black;
    }

    .col-sm-3{
      margin-right: 10px;
    }

    .navbar,.navbar-default{
      font-size: 10pt;
      margin-bottom: 50px;
      border-radius: 0px;
    }
    .glyphicon.glyphicon-log-in,
    .glyphicon.glyphicon-plus{
      font-size: 15px;
    }
    .glyphicon.glyphicon-search{
      color: #ecf0f1;
    }
    .glyphicon.glyphicon-search:hover{
      color: #ffffff;
    }
  
    .panel.panel-primary{
        border-color: black;
    }
  
    /* Navbar Color */
    .navbar-default {
      background-color: #f72727;
      border-color: black;
    }
    .navbar-default .navbar-brand {
      color: #ecf0f1;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
      color: #ffffff;
    }
    .navbar-default .navbar-text {
      color: #ecf0f1;
    }
    .navbar-default .navbar-nav > li > a {
      color: #ecf0f1;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
      color: #ffffff;
      background-color: black;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
      color: #ffffff;
      background-color: black9;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
      color: #ffffff;
      background-color: black;
    }
    .navbar-default .navbar-toggle {
      border-color: black;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
      background-color: black;
    }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #ecf0f1;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
      border-color: #ecf0f1;
    }
    .navbar-default .navbar-link {
      color: #ecf0f1;
    }
    .navbar-default .navbar-link:hover {
      color: #ffffff;
    }

    @media (max-width: 767px) {
      .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #ecf0f1;
      }
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #ffffff;
      }
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #ffffff;
        background-color: black;
      }
    }
    /* End of Navbar Color */
  </style>
</head>
<body>

<?php 
$member=$_SESSION['member_email'];
$query=mysqli_query($link,"SELECT * FROM member where member_email='$member'");
  if(!$query){
    die("Gagal : ".mysql_error());
  }
  if($row=mysqli_fetch_array($query)){
      $nama=$row['member_nama'];
      $tgl=$row['member_tglahir'];
      $id=$row['member_username'];
      $kontak=$row['member_email'];
      $jk=$row["member_jk"];
      $alamat=$row["member_alamat"];
      $telp=$row["member_tlp"];
      /*if($row['nama_foto']==""){
       $foto="img/pict_default.png";
      } )
      else{
       $foto = "core/upload/".$row['id_user']."/".$row['nama_foto'];
      }
      $count=mysqli_query($link,"SELECT * FROM post where id_user='$id'");
      $count=mysqli_num_rows($count); */
     } 
     ?> 




<div class="container-fluid">
<div class="row" style="margin-top:30px">
  <div class="col-sm-3" style="margin-left:10px;">

    <div class="col-sm-12" style="border:0px;">
      <div class="panel panel-primary">
        <div class="panel-heading" style="background-color:black; border-color:black"></div>
        <div class="panel-body"><img src="../image/default/profile.png" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>

    <div class="col-sm-12" style="border:0px;">
      <div class="panel panel-primary">
       <div class="panel-heading" style="background-color:black; border-color:black"></div>
       <div class="panel-body">
         <table class="col-sm-12">
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">Nama </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo $nama;?></td>
            </tr>
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">Tanggal Lahir </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo $tgl;?></td>
            </tr>
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">Jenis Kelamin </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo $jk;?></td>
            </tr>
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">Alamat </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo $alamat;?></td>
            </tr>
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">No Telp </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo $telp;?></td>
            </tr>
          <th class="col-sm-12" style="border-bottom:1px solid black; float:left;">Jumlah Post </th>
            <tr class="col-sm-12">
              <td style="float:right;"><?php echo ""?></td>
            </tr>

         </table>
       </div>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
  <a href="post.php">
  <input type="submit" name="signup" class="btn btn-danger btn-md" value="Buat Post Baru !" style="margin-top:10px;margin-bottom:15px;width:100%;">
  </a>  

  <div class="row">
  <?php
   
  ?>
    <form method="get" action="detailpost.php?id=<?php echo $id_post ?>" name="">
    <a href="javascript:;" onclick="parentNode.submit();">
    <input type="hidden" name="id" value="<?php echo $id_post ?>">
    <div class="col-sm-6" style="border:0px;margin: 0px -10px 0px 5px;">
      <div class="panel panel-primary">
        <div class="panel-body">
        <center>
        <a href="baca.php"><embed width="800" height="800" src="../buku/Teknologi/buku1.pdf" type="application/pdf" class="img-responsive" style="height:220px" alt="Image"></embed>Lihat Full</a>
        </center></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    </a>
    </form>
  <?php
    
  ?>
  </div>

  </div>
</div>
</div>
</body>
</html>
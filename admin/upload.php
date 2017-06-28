
<?php include "header.php"; ?>

<?php
        $auth = isset($_GET['auth']) ? ($_GET['auth']): '';
        $out = '';
        switch ($auth) {
            case '123131adajjadl131jakdl12':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-ok"></i>&nbsp; <b>SUCCESS :</b> Upload Berhasil.
                  </p>
                  </center>
                ';
              break;
              case 'e2eu8932dh73q3eh822e2qdq':
                $out = '
                  <center>
                  <p style="color:red;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-eror"></i>&nbsp; <b>Gagal :</b> Upload gagal.
                  </p>
                  </center>
                ';
        }
?>  


<?php
  if (!empty($_SESSION['admin_email']))
  {
     $admin_email = $_SESSION['admin_email'];
     $_SESSION['admin_email'] = $admin_email;
     $query_validasi = mysqli_query($link,"SELECT * FROM admin WHERE admin_email = '$admin_email'");
     $ambil = mysqli_fetch_assoc($query_validasi);
     extract($ambil);
?>

<div class="container">
    <h1 class="well">Upload Buku</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="http://localhost/berbagiilmu/upload_act.php" method="POST" enctype="multipart/form-data">
      <?php echo $out; ?>
      <div class="col-sm-12">
             <input type="hidden" name="buku_author" value="<?php echo "$admin_id"?>" readonly="readonly"> 
              <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="buku_judul" placeholder="Masukan judul buku..." class="form-control" required>
              </div>

              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Penulis</label>
                <input type="text" name="buku_penulis" placeholder="Masukan penulis..." class="form-control" required>
              </div>

              <div class="col-sm-6 form-group">
                <label>Bahasa</label>
                <input type="text" name="buku_bahasa" placeholder="Bahasa yang digunakan dalam buku..." class="form-control" required>
              </div>
            </div>  
            
              <div class="form-group">
                <label>Kategori</label>
                <br>
                <select name="buku_kategori">
                  <option>--Pilih Kategori--</option>
                  <?php
                    $kategori=mysqli_query($link,"SELECT * FROM kategori ORDER BY kategori_id");
                    while($x=mysqli_fetch_array($kategori))
                    { 
                     echo "<option value=\"$x[kategori_id],$x[kategori_jenis]\"> $x[kategori_jenis] </option>";
                    } 
                  ?>
                </select>
              </div>

               <div class="form-group">
                <label>File</label>
                  <input type="file" name="buku_file" class="form-control" required>
              </div>  

        <div>
          <br>
          <input type="submit" name="button_submit" value="Upload" class="btn btn-success">
          <input type="reset" value="Batal" class="btn btn-danger">
        </div>
      </div>
      
    </form> 
  </div>
  </div>
</div>
<?php 
}elseif($_SESSION['member_email']) {

	 $member_email = $_SESSION['member_email'];
	 $_SESSION['member_email'] = $member_email;
     $query_validasi = mysqli_query($link,"SELECT * FROM member WHERE member_email = '$member_email'");
     $ambil = mysqli_fetch_assoc($query_validasi);
     extract($ambil);
?>

<div class="container">
    <h1 class="well">Upload Buku</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="http://localhost/berbagiilmu/upload_act.php" method="POST" enctype="multipart/form-data">
      <?php echo $out; ?>
      <div class="col-sm-12">
             <input type="hidden" name="buku_author" value="<?php echo "$member_id"?>"> 
             <input type="hidden" name="buku_kategori" value="28" > 
               <div class="form-group">
                <label>File</label>
                  <input type="file" name="buku_file" class="form-control" required>
              </div>  

        <div>
          <br>
          <input type="submit" name="button_submit" value="Upload" class="btn btn-success">
          <input type="reset" value="Batal" class="btn btn-danger">
        </div>
      </div>
      
    </form> 
  </div>
  </div>
</div>

<?php }; include "footer.php";?>

<?php include "header.php"; ?>

<?php
  if (empty($_SESSION['admin_email']))
  {
  echo '<center><h1>404</h1>';
  }elseif($_SESSION['admin_email'])
  {
     $admin_email = $_SESSION['admin_email'];
     $query_validasi = mysqli_query($link,"SELECT * FROM admin WHERE admin_email = '$admin_email'");
     $ambil = mysqli_fetch_assoc($query_validasi);
     extract($ambil);
?>

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
              break;
        }
?>  

<div class="container">
    <h1 class="well">Upload Buku</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="upload_admin_act.php" method="POST" enctype="multipart/form-data">
      <?php echo $out; ?>
      <div class="col-sm-12">
             <input type="text" name="buku_author" value="1" readonly="readonly"> 
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
<?php } ?>
<?php include "footer.php";?>
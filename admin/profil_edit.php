<?php
include "header.php";
//session_start();
if((empty($_SESSION['member_email']))AND(empty($_SESSION['admin_email']))){ //LOGIN
  ?><script>
    window.alert("Harap Login!");
    window.location.href="login.php";
  </script>
  <?php
}
?>

<div class="container">
  <h1 class="well">Update Data Diri</h1>

<?php
if(!empty($_SESSION['admin_email']))
{ 
  $admin=$_SESSION['admin_email'];
  $query=mysqli_query($link,"SELECT * FROM admin where admin_email='$admin'");
  //$query1=mysqli_query($link,"SELECT CONCAT(admin_ttl,admin_tglahir)AS tgl_lahir FROM admin where admin_email='$admin'");
  //$row1=mysqli_fetch_array($query1);

  if(!$query){
    die("Gagal : ".mysql_error());
  }
  if($row=mysqli_fetch_array($query)){
      $id=$row['admin_id'];
      $nama=$row['admin_nama'];
      $tgl=$row['admin_tglahir'];
      $username=$row['admin_username'];
      $email=$row['admin_email'];
      $jk=$row['admin_jk'];
      $alamat=$row['admin_alamat'];
      $tlp=$row['admin_tlp'];
      $ttl=$row['admin_ttl'];   
      $tgl_lahir = date('d F Y', strtotime($tgl));

      if($row['nama_foto']==""){
       $foto="foto/pict_default.png";
      }
      else{
       $foto = "foto/admin/".$row['admin_id']."/".$row['nama_foto'];
      }

  } 
  ?>
  <div class="col-lg-12 well">

      <form action="profil_save.php" method="POST">  
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="hidden" name="admin_id"  class="form-control" value="<?php echo $id; ?>" />
              <input type="text" name="admin_nama" value="<?php echo $nama;?>" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="Jenis Kelamin">Jenis Kelamin</label>
                <br>
                  <?php
                    if (($jk)=='L') {
                      echo "<input type='radio' name='admin_jk' value='L' checked/>Laki-Laki";
                      echo "<input type='radio' name='admin_jk' value='P'/> Perempuan";
                    }else
                    {
                      echo "<input type='radio' name='admin_jk' value='L'/> Laki-Laki";
                      echo "<input type='radio' name='admin_jk' value='P' checked /> Perempuan";
                    }
                 ?>            </div>

            <div class="form-group">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="text" name="admin_ttl"  class="form-control" value="<?php echo $ttl; ?>"/>
            </div> 

            <div class="form-group">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="admin_tglahir" class="form-control" value="<?php echo $tgl; ?>"/>
            </div>   

            <div class="form-group">
              <label for="Alamat">Alamat</label>
              <input type="text" name="admin_alamat" value="<?php echo $alamat;?>" class="form-control" required/>
            </div>
          
          <div class="form-group">
            <label for="No Telephone/Handphone">Username</label>
            <input type="text" name="admin_username"  class="form-control" maxlength="15" value="<?php echo $username;?>" required/>
          </div>

          <div class="form-group">
            <label for="No Telephone/Handphone">No Telephone/Handphone</label>
            <input type="text" name="admin_tlp"  class="form-control" maxlength="13" value="<?php echo $tlp;?>" required/>
          </div>
    
          <div class="form-group" style="padding-bottom: 20px;">
            <label for="Email">Email</label>
            <input type="email" name="admin_email"  class="form-control" value="<?php echo $email;?>" required/>
           </div>         
               
          <div>
            <br>
            <input type="submit" name="submit_daftar" class="btn btn-success">
          </div>
      </form>
    </div>
  <?php
}else

if(!empty($_SESSION['member_email']))
{ 
$member=$_SESSION['member_email'];
$query=mysqli_query($link,"SELECT * FROM member where member_email='$member'");
  if(!$query){
    die("Gagal : ".mysql_error());
  }
  if($row=mysqli_fetch_array($query)){
      $id=$row['member_id'];
      $nama=$row['member_nama'];
      $tgl=$row['member_tglahir'];
      $username=$row['member_username'];
      $email=$row['member_email'];
      $jk=$row["member_jk"];
      $alamat=$row["member_alamat"];
      $tlp=$row["member_tlp"];
      $ttl=$row['member_ttl'];   
      $tgl_lahir = date('d F Y', strtotime($tgl));
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
<div class="col-lg-12 well">

     <form action="profil_save.php" method="POST">  
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="hidden" name="member_id"  class="form-control" value="<?php echo $id; ?>" />
              <input type="text" name="member_nama" value="<?php echo $nama;?>" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="Jenis Kelamin">Jenis Kelamin</label>
                <br>
                  <?php
                    if (($jk)=='L') {
                      echo "<input type='radio' name='member_jk' value='L' checked/>Laki-Laki";
                      echo "<input type='radio' name='member_jk' value='P'/> Perempuan";
                    }else
                    {
                      echo "<input type='radio' name='member_jk' value='L'/> Laki-Laki";
                      echo "<input type='radio' name='member_jk' value='P' checked /> Perempuan";
                    }
                 ?>            </div>

            <div class="form-group">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="text" name="member_ttl"  class="form-control" value="<?php echo $ttl; ?>"/>
            </div> 

            <div class="form-group">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="member_tglahir" class="form-control" value="<?php echo $tgl; ?>"/>
            </div>   

            <div class="form-group">
              <label for="Alamat">Alamat</label>
              <input type="text" name="member_alamat" value="<?php echo $alamat;?>" class="form-control" required/>
            </div>
          
          <div class="form-group">
            <label for="No Telephone/Handphone">Username</label>
            <input type="text" name="member_username"  class="form-control" maxlength="15" value="<?php echo $username;?>" required/>
          </div>

          <div class="form-group">
            <label for="No Telephone/Handphone">No Telephone/Handphone</label>
            <input type="text" name="member_tlp"  class="form-control" maxlength="13" value="<?php echo $tlp;?>" required/>
          </div>
    
          <div class="form-group" style="padding-bottom: 20px;">
            <label for="Email">Email</label>
            <input type="email" name="member_email"  class="form-control" value="<?php echo $email;?>" required/>
           </div>         
               
          <div>
            <br>
            <input type="submit" name="submit_daftar" class="btn btn-success">
          </div>
      </form>
    </div>
  <?php
  }
  ?>
</div>

<?php include "footer.php";?>
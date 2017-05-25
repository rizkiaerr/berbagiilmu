
<?php include "header.php"; ?>
<div class="container">
    <h1 class="well">Data Pendaftaran</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <form action="proses_save.php" method="POST">
      <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="member_nama" placeholder="Masukan Nama Lengkap anda.." class="form-control">
              </div>

              <div class="col-sm-2 form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="member_ttl" placeholder="Masukan tanggal lahir anda.." class="form-control">
              </div>
            </div>            
            
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="member_alamat" placeholder="Masukan Alamat anda.." rows="3" class="form-control"></textarea>
          </div> 
      
          <div> 
            <label>Alamat E-Mail</label>
            <input type="email" name="member_email" placeholder="e.g. anoni@domain.com" class="form-control">
          </div>  
          
          <div> 
            <label>Password</label>
            <input type="password" name="member_password" placeholder="********" class="form-control">
          </div>  
        <div>
          <br>
          <input type="submit" name="button_submit" value="Daftar" class="btn btn-success">
        </div>
      </div>
      
    </form> 
  </div>
  </div>
</div>

<? php include "footer.php";?>
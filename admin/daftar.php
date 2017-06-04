<?php include "header.php"; ?>
<div class="container">
  <h1 class="well">Data Pendaftaran</h1>
    <?php $data_last=mysqli_query($link,"SELECT member_id FROM member ORDER BY member_id DESC LIMIT 1"); ?>
  <div class="col-lg-12 well">

      <form action="proses_save.php" method="POST">
        
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="member_nama" placeholder="Masukan Nama Lengkap anda.." class="form-control" required>
              <input type="hidden" name="member_id" type="text" class="form-control" value="<?php echo $data_last+1; ?>"/>
            </div>
            
            <div class="form-group">
              <label for="Jenis Kelamin">Jenis Kelamin</label>
                <br>
                <input type="radio" name="member_jk" value="L" checked="checked"/> Laki-Laki
                <input type="radio" name="member_jk" value="P" /> Perempuan
            </div>

            <div class="form-group">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="Text" name="member_ttl"  class="form-control" placeholder="Tanggal Lahir" required/>
            </div> 

            <div class="form-group">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="member_tglahir"  class="form-control" placeholder="Tanggal Lahir" required/>
            </div>   

            <div class="form-group">
              <label for="Alamat">Alamat</label>
              <input type="text" name="member_alamat" placeholder="Masukan Alamat anda.." rows="3" class="form-control" required/>
            </div>
          
          <div class="form-group">
            <label for="No Telephone/Handphone">Username</label>
            <input type="text" name="member_username"  class="form-control" maxlength="15" placeholder="Username" required/>
          </div>


          <div class="form-group">
            <label for="No Telephone/Handphone">No Telephone/Handphone</label>
            <input type="text" name="member_tlp"  class="form-control" maxlength="13" placeholder="08xxxxxxxxxx" required/>
          </div>
    
          <div class="form-group" style="padding-bottom: 20px;">
            <label for="Email">Email</label>
            <input type="email" name="member_email"  class="form-control" placeholder="e.g samsudin@domain.com" required/>
           </div>         
     
          <div> 
            <label>Password</label>
            <input type="password" name="member_password" placeholder="********" class="form-control" required>
          </div>  
          
          <div>
            <br>
            <input type="submit" name="submit_daftar" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>
</div>

<? php include "footer.php";?>
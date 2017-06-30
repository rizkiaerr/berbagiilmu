<?php
  require "config.php";
  if(!empty($_GET['member_id'])){
	$member_id=$_GET['member_id'];
	$modal=mysqli_query($link,"SELECT * FROM member WHERE member_id='$member_id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Lihat Data Member <?php echo $r['member_nama']; ?></h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Nama Member">Nama Member</label>
                    <input type="hidden" name="member_id"  class="form-control" value="<?php echo $r['member_id']; ?>" />
                    <br>
                    <?php echo $r['member_nama']; ?>
                </div>

                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Jenis Kelamin">Jenis Kelamin</label>
                    <br>
                  <?php
                    if (($r['member_jk'])=='L') {
                     $jk="Laki-Laki";
                    }else
                    {
                      $jk="Perempuan";
                    }
                    echo $jk;
                 ?>
                </div>

                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Tempat Lahir">Tempat Lahir</label>
                    <br>
                    <?php echo $r['member_ttl']; ?>
                </div>
               
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Alamat">Tanggal Lahir</label>
                  <br>
                  <?php echo date('d F Y',strtotime($r['member_tglahir'])); ?>
                </div>
                
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Alamat">Alamat</label>
                  <br>
                  <?php echo $r['member_alamat']; ?>
                </div>
                
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="No Telephone/Handphone">No Telephone/Handphone</label>
                  <br>
                  <?php echo $r['member_tlp']; ?>
                </div>
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Username">Username</label>
                  <br>
                  <?php echo $r['member_username']; ?>
                </div>
                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Email">Email</label>
                  <br>
                  <?php echo $r['member_email']; ?>
                </div>

                <div class="form-group" style="padding-bottom: 1px;">
                  <label for="Password">Password</label>
                  <br>
                  <?php echo "*************"; ?>
                </div>

	            
            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>
<?php 
}elseif(!empty($_GET['buku_id'])){
  

  $buku_id=$_GET['buku_id'];
  $admin=mysqli_query($link,"SELECT buku_admin.*,admin.admin_nama,kategori.kategori_jenis FROM buku_admin,admin,kategori WHERE buku_admin.buku_author=admin.admin_id AND buku_admin.buku_kategori=kategori.kategori_id AND buku_admin.buku_id='$buku_id'");
  $member=mysqli_query($link,"SELECT buku.*,member.member_nama,kategori.kategori_jenis FROM buku,member,kategori WHERE buku.buku_author=member.member_id AND buku.buku_kategori=kategori.kategori_id AND buku.buku_id='$buku_id'");
  if(mysqli_num_rows($admin)==1){
  while($r=mysqli_fetch_array($admin)){
?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Lihat Data Buku <?php echo $r['buku_judul']; ?></h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php?save=buku_admin" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <input type="hidden" name="buku_id"  class="form-control" value="<?php echo $r['buku_id']; ?>" />
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Judul Buku</label>
                    <input type="text" name="buku_judul"  class="form-control" value="<?php echo $r['buku_judul']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Penulis Buku</label>
                    <input type="text" name="buku_penulis"  class="form-control" value="<?php echo $r['buku_penulis']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Bahasa</label>
                   <input type="text" name="buku_bahasa"  class="form-control" value="<?php echo $r['buku_bahasa']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Tanggal Lahir">Author</label>
                    <input type="text" name="buku_author"  class="form-control" value="<?php echo $r['admin_nama']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Kategori</label>
                    <input type="text" name="buku_kategori"  class="form-control" value="<?php echo $r['kategori_jenis']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Tgl Upload</label>
                  <br>
                  <input type="date" name="tgl_upload" value="<?php echo $r['tanggal_upload']; ?>"/ readonly>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

             <?php }//end while ?>
            </div>
        </div>
    </div>
    <?php 
      }elseif(mysqli_num_rows($member)==1){
        while($r=mysqli_fetch_array($member)){
?>

<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Lihat Data Buku <?php echo $r['buku_judul']; ?></h4>
        </div>

        <div class="modal-body">
          <form action="proses_save.php?save=buku_member" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <input type="hidden" name="buku_id"  class="form-control" value="<?php echo $r['buku_id']; ?>" />
                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Judul Buku</label>
                    <input type="text" name="buku_judul"  class="form-control" value="<?php echo $r['buku_judul']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Tanggal Lahir">Author</label>
                    <input type="text" name="buku_author"  class="form-control" value="<?php echo $r['member_nama']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label>Tgl Upload</label>
                  <br>
                  <input type="date" name="tgl_upload" value="<?php echo $r['tanggal_upload']; ?>"/ readonly>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Confirm
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Cancel
                  </button>
              </div>

              </form>

             <?php }//end while fetch buku member ?>
            </div>
        </div>
    </div>
    <?php 
      } //end if mysqli row member
    ?>
<?php 
}
?>

<?php
    require "config.php";
	$member_id=$_GET['member_id'];
	$modal=mysqli_query($link,"SELECT * FROM member WHERE member_id='$member_id'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">
        	<form action="pengaturan_proses_pw.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Nama Member">Password Lama</label>
                    <input type="hidden" name="member_id"  class="form-control" value="<?php echo $r['member_id']; ?>" />
                    <input type="password" name="member_password"  class="form-control" placeholder="Password Lama Anda" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Jenis Kelamin">Password Baru</label>
                    <input type="password" name="member_password_baru"  class="form-control" placeholder="Password Baru Anda" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Tanggal Lahir">Konfirmasi Password Baru</label>
                    <input type="password" name="member_password_baru"  class="form-control" placeholder="Masukkan Kembali Password Baru Anda" />
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

             <?php 
             } 
             
             ?>

            </div>

           
        </div>
    </div>
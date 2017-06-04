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
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Nama Member">Nama Member</label>
                    <input type="hidden" name="member_id"  class="form-control" value="<?php echo $r['member_id']; ?>" />
                    <input type="text" name="member_nama"  class="form-control" value="<?php echo $r['member_nama']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Jenis Kelamin">Jenis Kelamin</label>
                    <br>
                  <?php
                    if (($r['member_jk'])=='L') {
                      echo "<input type='radio' name='member_jk' value='L' checked/>Laki-Laki";
                      echo "<input type='radio' name='member_jk' value='P'/> Perempuan";
                    }else
                    {
                      echo "<input type='radio' name='member_jk' value='L'/> Laki-Laki";
                      echo "<input type='radio' name='member_jk' value='P' checked /> Perempuan";
                    }
                 ?>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Tempat Lahir">Tempat Lahir</label>
                    <input type="text" name="member_ttl"  class="form-control" value="<?php echo $r['member_ttl']; ?>"/>
                </div>

               <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Alamat">Tanggal Lahir</label>
                    <input type="date" name="member_tglahir" class="form-control" value="<?php echo $r['member_tglahir']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Alamat">Alamat</label>
                    <textarea name="member_alamat"  class="form-control"><?php echo $r['member_alamat']; ?></textarea>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="No Telephone/Handphone">No Telephone/Handphone</label>
                   <input type="text" name="member_tlp"  class="form-control" value="<?php echo $r['member_tlp']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Email">Email</label>
                   <input type="text" name="member_email"  class="form-control" value="<?php echo $r['member_email']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Password">Password</label>
                   <input type="password" name="member_password"  class="form-control" value="<?php echo $r['member_password']; ?>"/>
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

             <?php } ?>

            </div>

           
        </div>
    </div>
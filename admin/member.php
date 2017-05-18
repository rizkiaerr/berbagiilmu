<?php
  include "header.php";
?>

<div class="container">
  <h2>Crud PHP 7 Menggunakan Modal Bootstrap (Popup)</h2>
  <p>Bootstrap Modal  (Popup) By Aguzrybudy, Selasa 19 April 2016</p>
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Email</th>
      <th></th>
    </thead>
<?php 
  //menampilkan data mysqli
 // $user = "root";
 // $password = "";
 // $database = "berbagiilmu";

  //$link=mysqli_connect('localhost',$user,$password,$database);

  $no = 0;
  $modal=mysqli_query($link,"SELECT * FROM member");
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['member_nama']; ?></td>
      <td><?php echo  $r['member_ttl']; ?></td>
      <td><?php echo  $r['member_alamat']; ?></td>
      <td><?php echo  $r['member_email']; ?></td>
      <td>
         <a href="#" class='open_modal' id='<?php echo  $r['member_id']; ?>'>Edit</a>
         <a href="#" onclick="confirm_modal('proses_delete.php?&modal_id=<?php echo  $r['member_id']; ?>');">Delete</a>
      </td>
  </tr>
<?php } ?>
 


</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add Data Using Modal Boostrap (popup)</h4>
        </div>

        <div class="modal-body">

          <form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Nama Member">Nama Member</label>
                    <input type="text" name="member_nama"  class="form-control" placeholder="Nama Member" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Tanggal Lahir">Tanggal Lahir</label>
                    <input type="date" name="member_ttl"  class="form-control" placeholder="Tanggal Lahir" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Alamat">Alamat</label>
                    <input type="text" name="member_alamat"  class="form-control" placeholder="Alamat" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Email">Email</label>
                   <input type="email" name="member_email"  class="form-control" placeholder="e.g samsudin@domain.com" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Password">Password</label>
                   <input type="password" name="member_password"  class="form-control" required/>
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

<!--
          <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Modal Name</label>
                  <input type="text" name="modal_name"  class="form-control" placeholder="Modal Name" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Description</label>
                   <textarea name="description"  class="form-control" placeholder="Description" required/></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Date">Date</label>
                  <input type="text" name="date"  class="form-control" plcaceholder="Timestamp" disabled value="Timestamp" required/>
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
-->
           

            </div>

           
        </div>
    </div>
</div>
<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {member_id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<?php
  include "footer.php";
?>




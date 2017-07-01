<?php 
//    include 'cek.php';
  include 'header.php';
?>

<?php
  if (!empty($_SESSION['admin_email']))
  {
?>

<div class="container">
  <h2>Daftar Member</h2>
  <br>
  <form action="cari.php?cari=member" method="POST">
  <input type="text" name="cari" placeholder="cari berdasarkan ..... "></input>
  <input type="submit" class="btn btn-sm btn-default" value="Cari"></input>
  </form>
  <br>
  <br>

<table id="mytable" class="table table-bordered">
    <thead>
      <th> No </th>
      <th> Nama </th>
      <th> No Telephone</th>
      <th> Email</th>
      <th></th>
    </thead>

<?php 
  //menampilkan data mysqli
  $no = 0;
  $data_last=mysqli_query($link,"SELECT member_id FROM member ORDER BY member_id DESC LIMIT 1");
  $modal=mysqli_query($link,"SELECT * FROM member");
  while($r=mysqli_fetch_array($modal)){
  $no++;       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['member_nama']; ?></td>
      <td><?php echo  $r['member_tlp']; ?></td>
      <td><?php echo  $r['member_email']; ?></td>
      <td>

         <a href="#" class='open_modal btn btn-sm btn-default' id='<?php echo  $r['member_id']; ?>' ><span class="glyphicon glyphicon-eye-open"></span></a>
         <a href="#"  class="btn btn-sm btn-default" onclick="confirm_modal('proses_delete.php?&member_id=<?php echo  $r['member_id']; ?>');"><span class="glyphicon glyphicon-trash"></span></a>
      </td>
  </tr>
<?php } ?>
</table>
</div>

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
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin akan menghapus data ini? ?</h4>
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
}
?>

<?php
  include "footer.php";
?>

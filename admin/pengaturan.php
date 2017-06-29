<?php 
	include "header.php";
?>

<br><br>

<!-- Page Content -->
<div class="container">

<div class="row">
   <div class="col-lg-12">
      <h2><span style="margin-left:10px" class="glyphicon glyphicon-cog"></span>  Pengaturan </h2>
    
    <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Pengaturan</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>    
        
    <hr>
    <br>
<?php
  //menampilkan data mysqli
    $modal=mysqli_query($link,"SELECT * FROM member WHERE member_id=1");
    $ttl=mysqli_query($link,"SELECT CONCAT_WS(', ',member_ttl,(SELECT DATE_FORMAT(member_tglahir, '%d %M %Y')))AS ttl FROM member WHERE member_id=1");
    while($r=mysqli_fetch_array($modal)){
   
?>
	<div class="container-fluid">
		<h3 class="page-header">
            Data Diri
                    <div class="pull-right">
  						<button  style="margin-bottom:10px;" data-toggle="modal" data-target="#ModalEdit" class="btn btn-info col-md-12">
            				<a href="#" class='open_modal' id='<?php echo  $r['member_id']; ?>'>
                            <span class="glyphicon glyphicon-edit"></span>  Update Data Diri </a>
        				</button>
                	</div>
        </h3>

		<div>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Nama Lengkap
                </div>
                <div class="col-xs-7 col-sm-6">
                    <?php
                    echo  $r['member_nama'];
                    ?>                            
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Jenis Kelamin                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    <?php
                    if($r['member_jk']=='L'){
                        echo  'Laki-Laki';
                    }else{
                        echo 'Perempuan';
                    }
                    ?>                            
                </div>
            </div>
            <?php
             while($t=mysqli_fetch_array($ttl)){
            ?>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Tempat, Tanggal Lahir                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    <?php
                    echo  $t['ttl']; 
                    ?>                            
                </div>
            </div>
            <?php 
            } 
            ?>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Alamat                            
                </div>
                <div class="col-xs-7 col-sm-6">
                       <?php
                    echo  $r['member_alamat']; 
                    ?>                           
                </div>
            </div>

		</div>
	</div>

	<br><br>
	
	<div class="container-fluid">
		<h3 class="page-header">
            Informasi Login
                    <div class="pull-right">
  						<button  style="margin-bottom:10px;" data-toggle="modal" data-target="#ModalPw" class="btn btn-info col-md-12">
                            <a href="#" class='pw_modal' id='<?php echo  $r['member_id']; ?>'>
                            <span class="glyphicon glyphicon-edit"></span>  Update Password </a>
                        </button>
                	</div>
        </h3>

		<div>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    User Name                          
                </div>
                <div class="col-xs-7 col-sm-6">
                    <?php
                    echo $r['member_username'];
                    ?>
         		   </div>
        	  </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Email                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    <?php
                    echo  $r['member_email']; 
                    ?>                           
                </div>
            </div>

		</div>

	</div>
</div>
</div>
<!-- end Page Content -->
<?php
}
?>
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "pengaturan_edit.php",
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

<!-- Javascript untuk popup modal Update Password--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".pw_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "pengaturan_pw.php",
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

<?php 
	include "header.php";
?>
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

	<div class="container-fluid">
		<h3 class="page-header">
            Data Diri
                    <div class="pull-right">
  						<button  style="margin-bottom:10px;" data-toggle="modal" data-target="#dataModal" class="btn btn-info col-md-12">
            				<span class="glyphicon glyphicon-edit"></span>  Update Data Diri
        				</button>
                	</div>
        </h3>

		<div>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Nama Lengkap                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    Dl Rhyraim                            
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Tanggal Lahir                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    17 Agustus 1945                            
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                	  Jenis Kelamin  
                </div>
                <div class="col-xs-7 col-sm-6">
                      Perempuan                            

                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Alamat                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    Jl. Dipatiukur No.122 Bandung                            
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    No. Telepon                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    081212122335                            
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    Email                            
                </div>
                <div class="col-xs-7 col-sm-6">
                    datagame12@gmail.com                            
                </div>
            </div>

		</div>
	</div>

	<br><br>
	
	<div class="container-fluid">
		<h3 class="page-header">
            Informasi Login
                    <div class="pull-right">
  						<button  style="margin-bottom:10px;" data-toggle="modal" class="btn btn-info col-md-12">
            				<span class="glyphicon glyphicon-edit"></span><a href="" class="open_modal"> Update Password</a> 
        				</button>
                	</div>
        </h3>
		
		<div>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    User Name                          
                </div>
                <div class="col-xs-7 col-sm-6">
                    DlRhyareim
         		</div>
        	</div>

		</div>
	</div>
</div>
</div>
<!-- end Page Content -->

<div id="dataModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Data Diri</h4>
			</div>
               <center>
			<div class="modal-body">
        	<div class="row">
            	<div class="col-md-12" align="left">

                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>No. Telepon:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Tanggal Lahir:</label>
                            <input type="date">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Jenis Kelamin:</label>
                            <input type="radio" class="form-control" id="jk"> laki- laki
							<input type="radio" class="form-control" id="jk"> perempuan


                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <center>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    </center>
                </form>
            </div>

        </div>
        <!-- /.row -->
                   
    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/contact_me.js"></script>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>


<?php 
	include "footer.php";
?>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "modal_edit.php",
    			   type: "GET",
    			   data : {modal_id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>
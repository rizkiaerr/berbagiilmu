<!-- page header -->
<?php 
	include 'header.php';
?>
<!-- /page header -->

    <div class="container">

        <h2><span  class="glyphicon glyphicon-cloud"></span>  Contact</h2>
        <button  style="margin-bottom:10px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2">
            	<span class="glyphicon glyphicon-gift"></span>  Send us a Message
        </button>
        	
        <br>

        

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-6">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <hr>
                <table border="0" align="center" width="470">
                <tr>
                	<td> <i class="fa fa-male"></i>
                    	 	<abbr title="Person">
                     			CP  	
                     		</abbr>
                    </td>
                    <td>
                     : Melrose Place
                    </td>
                 </tr>
                 <tr></tr>
                 <tr>
                    <td> <i class="fa fa-phone"></i>
                    		<abbr title="Phone">
                    			Phone  
                    		</abbr>
                    </td>
                    <td>
			         : (123) 456-7890
                    </td>
                </tr>
                <tr>
                    <td> <i class="fa fa-home"></i>
                    		<abbr title="Address">
			                    Address 
                    		</abbr>
                    </td>
                    <td>
                     : Beverly Hills, CA 90210
                    </td>
                 </tr>
                 <tr>
                    <td> <i class="fa fa-envelope"></i>
                    		<abbr title="Email Address">
			                    E-Mail 
                    		</abbr>
                    </td>
                    <td>
                     <a href="mailto:name@example.com">: name@example.com</a>
                    </td>
                </tr>
                </table>
                <br>
                <table align="center">
                <tr>
                	<td> 
                    	<h4><abbr title="Time"> <span class="glyphicon glyphicon-time"></span></abbr>
                        	   Monday - Friday: 9:00 AM to 5:00 PM 
                        </h4>
                    </td>
                </tr>
                </table>
                
                <br><center>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

          	<!-- Page Footer -->
			<?php
				include 'footer.php';
			?>
			<!-- /Page Footer -->
    
         
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Send us a Message</h4>
			</div>
               <center>
			<div class="modal-body">
        	<div class="row">
            	<div class="col-md-12" align="left">
         
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <center>
                    <button type="submit" class="btn btn-primary">Send Message</button>
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
</center>

        

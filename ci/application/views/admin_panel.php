 <?php 
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$name = ($this->session->userdata['logged_in']['name']);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bookHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrapnew.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-elements.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/media-queries.css">
    
    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    
    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      
      <!-- Fav and touch icons -->
      <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">


      

    <!-- SCRIPT 
    ============================================================-->  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
      
      
  </head>

  <body>

  <!-- <div id="header-row">
    <div class="container">
      	<div class="row">
             
              <div class="span3"><a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"/></a></div>
             
        </div>
    </div>
  </div>  -->
    <div class="container">
  	<h1> Admin Panel </h1>
	<!-- <ul class="nav nav-tabs">
	    <li role="presentation" class="active"><a href="#book">Home</a></li>
  		<li role="presentation"><a href="#author">Profile</a></li>
  		<li role="presentation"><a href="#admin">Messages</a></li>
	</ul> -->
    <ul class="nav nav-tabs">
    	<li class="active"><a data-toggle="tab" href="#book">Add Book</a></li>
    	<li><a data-toggle="tab" href="#author">Add Author</a></li>
    	<li><a data-toggle="tab" href="#admin">Add Admin</a></li>
    	<!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
    	<li><a href="<?php echo base_url();?>index.php/user_auth/logout">Logout</a></li>
  	</ul>

	<div class="tab-content">
		<div id="book" name="book" class="tab-pane fade in active">
		 	<div class="description-container">
	        	<div class="container">
	        		<div class="row">
	                	<div class="col-sm-12 description-title">
	                    	<h2>Add Book</h2>
	                	</div>
	            	</div>
		            <!-- <div class="row">
		                <div class="col-sm-12 description-text">
		                    <p>
		                    	This is a free multi-step form made with Bootstrap. 
		                    	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
		                    </p>
		                    <div class="divider-1">. . . . . . . . . . . . . . . .</div>
		                </div>
		            </div> -->
				</div>
			</div>
		
		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container">
	        	<!-- <div class="row">
	                <div class="col-sm-12 msf-title">
	                    <h3>Fill In The Form</h3>
	                    <p>Please complete the form below to get instant access to our application and all its features:</p>
	                </div>
	            </div> -->
	            <div class="row">
	                <div class="col-sm-12 msf-form">
	                    
	                    <form role="form" action="" method="post" class="form-inline">

	                    	<fieldset>
	            				<h4><span class="step">(Step 1 / 3)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">ISBN:</label><br>
				                    <input type="text" name="first-name" class="first-name form-control" id="first-name">
				                </div>
				                <div class="form-group">
				                    <label for="last-name">Book Title:</label><br>
				                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
				                </div>
				                <div class="form-group">
				                    <label for="height">Author:</label><br>
				                    <input type="text" name="height" class="height form-control" id="height">
				                </div>
				                <div class="form-group">
				                    <label for="weight">Rating:</label><br>
				                    <input type="text" name="weight" class="weight form-control" id="weight">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	                    	
	                    	<!-- <fieldset>
	            				<h4><span class="step">(Step 1 / 3)</span></h4>
	            				<div class="form-group">
				                    <label for="isbn">ISBN   :</label><br>
				                    <input  name="first-name" class="first-name form-control" id="first-name">
				                </div>
				                <div class="form-group">
				                    <label for="last-name">Book Title:</label><br>
				                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
				                </div>
				                <div class="form-group">
				                    <label for="height">Author:</label><br>
				                    <input type="text" name="height" class="height form-control" id="height">
				                </div>
				                <div class="form-group">
				                    <label for="weight">Rating:</label><br>
				                    <input type="text" name="weight" class="weight form-control" id="weight">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- <fieldset>
	            				<h4>Place and Date of Birth <span class="step">(Step 2 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="birth-city">City:</label><br>
				                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
				                </div>
				                <div class="form-group">
				                    <label for="birth-state">State / Province:</label><br>
				                    <input type="text" name="birth-state" class="birth-state form-control" id="birth-state">
				                </div>
				                <div class="form-group">
				                    <label for="birth-country">Country:</label><br>
				                    <input type="text" name="birth-country" class="birth-country form-control" id="birth-country">
				                </div>
				                <div class="form-group">
				                    <label for="birth-date">Date (YYYY/MM/DD):</label><br>
				                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- <fieldset>
	            				<h4>Address and Contact Information <span class="step">(Step 3 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="address">Address:</label><br>
				                    <input type="text" name="address" class="address form-control" id="address">
				                </div>
				                <div class="form-group">
				                    <label for="address-city">City:</label><br>
				                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
				                </div>
				                <div class="form-group">
				                    <label for="address-state">State / Province:</label><br>
				                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
				                </div>
				                <div class="form-group">
				                    <label for="address-country">Country:</label><br>
				                    <input type="text" name="address-country" class="address-country form-control" id="address-country">
				                </div>
				                <div class="form-group">
				                    <label for="address-postal-code">Postal Code:</label><br>
				                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
				                </div>
				                <div class="form-group">
				                    <label for="telephone">Telephone:</label><br>
				                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
				                </div>
				                <div class="form-group">
				                    <label for="mobile-phone">Mobile Phone:</label><br>
				                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
				                </div>
				                <div class="form-group">
				                    <label for="email">Email:</label><br>
				                    <input type="text" name="email" class="email form-control" id="email">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	                    	
	                    	<fieldset>
	            				<h4> <span class="step">(Step 2 / 3)</span></h4>
	            				<div class="form-group">
				                    <label for="social-facebook">Pages:</label><br>
				                    <input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook">
				                </div>
				                <div class="form-group">
				                    <label for="social-twitter">Cover Image Path:</label><br>
				                    <input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter">
				                </div>
				                <div class="form-group">
				                    <label for="social-google-plus">Genre 1:</label><br>
				                    <input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus">
				                </div>
				                <div class="form-group">
				                    <label for="social-instagram">Genre 2:</label><br>
				                    <input type="text" name="social-instagram" class="social-instagram form-control" id="social-instagram">
				                </div>
				                <div class="form-group">
				                    <label for="social-pinterest">Genre 3:</label><br>
				                    <input type="text" name="social-pinterest" class="social-pinterest form-control" id="social-pinterest">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4><span class="step">(Step 3 / 3)</span></h4>
	            				<div class="form-group">
									<label for="about-you">Description:</label><br>
				                    <textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	            			
	            			<!-- <fieldset>
	            				<h4>Why You Want To Join <span class="step">(Step 6 / 7)</span></h4>
	            				<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <textarea name="why-join" class="why-join form-control" id="why-join"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- fieldset>
	            				<h4>Other Form Elements <span class="step">(Step 7 / 7)</span></h4>
				                <div class="radio-buttons-1">
				                	<p>Radio Buttons 1:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-4"> Option 4
					                </label>
								</div>
				                <div class="radio-buttons-2">
									<p>Radio Buttons 2:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="checkboxes-1">
	            					<p>Checkboxes 1:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-4"> Option 4
					                </label>
								</div>
								<div class="checkboxes-2">
	            					<p>Checkboxes 2:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="selects-1">
									<p>Select 1:</p>
					                <select class="form-control" name="select-1">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
								<div class="selects-2">
									<p>Select 2:</p>
					                <select class="form-control" name="select-2">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset> -->
	                    	
	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		  </div>
		  <div id="author" name="author" class="tab-pane fade">
		    	<div class="description-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 description-title">
	                    <h2>Add Author</h2>
	                </div>
	            </div>
	            <!-- <div class="row">
	                <div class="col-sm-12 description-text">
	                    <p>
	                    	This is a free multi-step form made with Bootstrap. 
	                    	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
	                    </p>
	                    <div class="divider-1">. . . . . . . . . . . . . . . .</div>
	                </div>
	            </div> -->
			</div>
		</div>
		
		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container">
	        	<!-- <div class="row">
	                <div class="col-sm-12 msf-title">
	                    <h3>Fill In The Form</h3>
	                    <p>Please complete the form below to get instant access to our application and all its features:</p>
	                </div>
	            </div> -->
	            <div class="row">
	                <div class="col-sm-12 msf-form">
	                    
	                    <form role="form" action="" method="post" class="form-inline">
	                    	
	                    	<!-- <fieldset>
	            				<h4><span class="step">(Step 1 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">Name:</label><br>
				                    <input type="text" name="first-name" class="first-name form-control" id="first-name">
				                </div>
				                <div class="form-group">
				                    <label for="last-name">Birth Place:</label><br>
				                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
				                </div>
				                <div class="form-group">
				                    <label for="height">Height:</label><br>
				                    <input type="text" name="height" class="height form-control" id="height">
				                </div>
				                <div class="form-group">
				                    <label for="weight">Weight:</label><br>
				                    <input type="text" name="weight" class="weight form-control" id="weight">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- <fieldset>
	            				<h4>Place and Date of Birth <span class="step">(Step 2 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="birth-city">City:</label><br>
				                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
				                </div>
				                <div class="form-group">
				                    <label for="birth-state">State / Province:</label><br>
				                    <input type="text" name="birth-state" class="birth-state form-control" id="birth-state">
				                </div>
				                <div class="form-group">
				                    <label for="birth-country">Country:</label><br>
				                    <input type="text" name="birth-country" class="birth-country form-control" id="birth-country">
				                </div>
				                <div class="form-group">
				                    <label for="birth-date">Date (YYYY/MM/DD):</label><br>
				                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- <fieldset>
	            				<h4>Address and Contact Information <span class="step">(Step 3 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="address">Address:</label><br>
				                    <input type="text" name="address" class="address form-control" id="address">
				                </div>
				                <div class="form-group">
				                    <label for="address-city">City:</label><br>
				                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
				                </div>
				                <div class="form-group">
				                    <label for="address-state">State / Province:</label><br>
				                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
				                </div>
				                <div class="form-group">
				                    <label for="address-country">Country:</label><br>
				                    <input type="text" name="address-country" class="address-country form-control" id="address-country">
				                </div>
				                <div class="form-group">
				                    <label for="address-postal-code">Postal Code:</label><br>
				                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
				                </div>
				                <div class="form-group">
				                    <label for="telephone">Telephone:</label><br>
				                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
				                </div>
				                <div class="form-group">
				                    <label for="mobile-phone">Mobile Phone:</label><br>
				                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
				                </div>
				                <div class="form-group">
				                    <label for="email">Email:</label><br>
				                    <input type="text" name="email" class="email form-control" id="email">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	                    	
	                    	<fieldset>
	            				<h4><span class="step">(Step 1 / 2)</span></h4>
	            				<div class="form-group">
				                    <label for="social-facebook">Name:</label><br>
				                    <input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook">
				                </div>
				                <div class="form-group">
				                    <label for="social-twitter">Birth Place:</label><br>
				                    <input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter">
				                </div>
				                <div class="form-group">
				                    <label for="social-google-plus">Birth Date:</label><br>
				                    <input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus">
				                </div>
				                <div class="form-group">
				                    <label for="social-instagram">Died On:</label><br>
				                    <input type="text" name="social-instagram" class="social-instagram form-control" id="social-instagram">
				                </div>
				                <div class="form-group">
				                    <label for="social-pinterest">Cover Image:</label><br>
				                    <input type="text" name="social-pinterest" class="social-pinterest form-control" id="social-pinterest">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4> <span class="step">(Step 2 / 2)</span></h4>
	            				<div class="form-group">
									<label for="about-you">About Author:</label><br>
				                    <textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	            			
	            			<!-- <fieldset>
	            				<h4>Why You Want To Join <span class="step">(Step 6 / 7)</span></h4>
	            				<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <textarea name="why-join" class="why-join form-control" id="why-join"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset> -->
	            			
	            			<!-- <fieldset>
	            				<h4>Other Form Elements <span class="step">(Step 7 / 7)</span></h4>
				                <div class="radio-buttons-1">
				                	<p>Radio Buttons 1:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-4"> Option 4
					                </label>
								</div>
				                <div class="radio-buttons-2">
									<p>Radio Buttons 2:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="checkboxes-1">
	            					<p>Checkboxes 1:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-4"> Option 4
					                </label>
								</div>
								<div class="checkboxes-2">
	            					<p>Checkboxes 2:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="selects-1">
									<p>Select 1:</p>
					                <select class="form-control" name="select-1">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
								<div class="selects-2">
									<p>Select 2:</p>
					                <select class="form-control" name="select-2">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	                    	 -->
	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		  </div>
		  <div id="admin" name="admin" class="tab-pane fade">
		    	<div class="description-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 description-title">
	                    <h2>Add Admin</h2>
	                </div>
	            </div>
	            <!-- <div class="row">
	                <div class="col-sm-12 description-text">
	                    <p>
	                    	This is a free multi-step form made with Bootstrap. 
	                    	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
	                    </p>
	                    <div class="divider-1">. . . . . . . . . . . . . . . .</div>
	                </div>
	            </div> -->
			</div>
		</div>
		
		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container">
	        	<!-- <div class="row">
	                <div class="col-sm-12 msf-title">
	                    <h3>Fill In The Form</h3>
	                    <p>Please complete the form below to get instant access to our application and all its features:</p>
	                </div>
	            </div> -->
	            <div class="row">
	                <div class="col-sm-12 msf-form">
	                    
	                    <form role="form" action="" method="post" class="form-inline">
	                    	
	                    	<!-- <fieldset>
	            				<h4>Introduction <span class="step">(Step 1 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">First Name:</label><br>
				                    <input type="text" name="first-name" class="first-name form-control" id="first-name">
				                </div>
				                <div class="form-group">
				                    <label for="last-name">Last Name:</label><br>
				                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
				                </div>
				                <div class="form-group">
				                    <label for="height">Height:</label><br>
				                    <input type="text" name="height" class="height form-control" id="height">
				                </div>
				                <div class="form-group">
				                    <label for="weight">Weight:</label><br>
				                    <input type="text" name="weight" class="weight form-control" id="weight">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Place and Date of Birth <span class="step">(Step 2 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="birth-city">City:</label><br>
				                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
				                </div>
				                <div class="form-group">
				                    <label for="birth-state">State / Province:</label><br>
				                    <input type="text" name="birth-state" class="birth-state form-control" id="birth-state">
				                </div>
				                <div class="form-group">
				                    <label for="birth-country">Country:</label><br>
				                    <input type="text" name="birth-country" class="birth-country form-control" id="birth-country">
				                </div>
				                <div class="form-group">
				                    <label for="birth-date">Date (YYYY/MM/DD):</label><br>
				                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Address and Contact Information <span class="step">(Step 3 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="address">Address:</label><br>
				                    <input type="text" name="address" class="address form-control" id="address">
				                </div>
				                <div class="form-group">
				                    <label for="address-city">City:</label><br>
				                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
				                </div>
				                <div class="form-group">
				                    <label for="address-state">State / Province:</label><br>
				                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
				                </div>
				                <div class="form-group">
				                    <label for="address-country">Country:</label><br>
				                    <input type="text" name="address-country" class="address-country form-control" id="address-country">
				                </div>
				                <div class="form-group">
				                    <label for="address-postal-code">Postal Code:</label><br>
				                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
				                </div>
				                <div class="form-group">
				                    <label for="telephone">Telephone:</label><br>
				                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
				                </div>
				                <div class="form-group">
				                    <label for="mobile-phone">Mobile Phone:</label><br>
				                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
				                </div>
				                <div class="form-group">
				                    <label for="email">Email:</label><br>
				                    <input type="text" name="email" class="email form-control" id="email">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	                    	 -->
	                    	<fieldset>
	            				<h4> <span class="step">(Step 1 / 1)</span></h4>
	            				<!-- <div class="form-group">
				                    <label for="social-facebook">Username:</label><br>
				                    <input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook">
				                </div>
				                <div class="form-group">
				                    <label for="social-twitter">Password:</label><br>
				                    <input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter">
				                </div> -->
				                <div class="form-group">
				                    <label for="social-google-plus">Username:</label><br>
				                    <input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus">
				                </div>
				                <div class="form-group">
				                    <label for="social-instagram">Password:</label><br>
				                    <input type="text" name="social-instagram" class="social-instagram form-control" id="social-instagram">
				                </div>
				                <div class="form-group">
				                    <label for="social-pinterest">Full Name:</label><br>
				                    <input type="text" name="social-pinterest" class="social-pinterest form-control" id="social-pinterest">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	            			
	            			<!-- <fieldset>
	            				<h4>About You <span class="step">(Step 5 / 7)</span></h4>
	            				<div class="form-group">
									<label for="about-you">Tell us a bit about yourself:</label><br>
				                    <textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Why You Want To Join <span class="step">(Step 6 / 7)</span></h4>
	            				<div class="form-group">
									<label for="why-join">Tell us why you want to join our application:</label><br>
				                    <textarea name="why-join" class="why-join form-control" id="why-join"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Other Form Elements <span class="step">(Step 7 / 7)</span></h4>
				                <div class="radio-buttons-1">
				                	<p>Radio Buttons 1:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-4"> Option 4
					                </label>
								</div>
				                <div class="radio-buttons-2">
									<p>Radio Buttons 2:</p>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-1"> Option 1
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-2"> Option 2
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-3"> Option 3
					                </label>
					                <label class="radio-inline">
					                	<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="checkboxes-1">
	            					<p>Checkboxes 1:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-4"> Option 4
					                </label>
								</div>
								<div class="checkboxes-2">
	            					<p>Checkboxes 2:</p>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-1"> Option 1
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-2"> Option 2
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-3"> Option 3
					                </label>
					                <label class="checkbox-inline">
					                	<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-4"> Option 4
					                </label>
								</div>
	            				<br>
	            				<div class="selects-1">
									<p>Select 1:</p>
					                <select class="form-control" name="select-1">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
								<div class="selects-2">
									<p>Select 2:</p>
					                <select class="form-control" name="select-2">
					                	<option value="1">Option 1</option>
					                	<option value="2">Option 2</option>
					                	<option value="3">Option 3</option>
					                	<option value="4">Option 4</option>
					                </select>
								</div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset> -->
	                    	
	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		  </div>
	</div>
	       <!-- Description -->
		






   </div>
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration | bookHub</title>

        <!-- CSS -->
          <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../../assets/login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../assets/login/css/form-elements.css">
        <link rel="stylesheet" href="../../assets/login/css/style.css">
        
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../assets/img/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../assets/img/apple-touch-icon-57-precomposed.png">
        
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<div id="header-row">
    <div class="container">
      <div class="row">
             <div class="span3"><a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"/></a></div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
        
      </div>
    </div>
  </div>
  <!-- /HEADER ROW -->

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong/> Register on bookHub</h1>
                            <div class="description">
                            	<p>
	                            	Register with us to get started!
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-3"></div>                           	
                        <div class="col-sm-6">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Don't have an Account? Sign up now
                                                        !</h3>
	                            		<p style="color:red"><?php
                                                        if (isset($message)) {
                                                            echo $message;
                                                        }
                                                        ?></p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="<?php echo base_url().'index.php/user_auth/add_user';?>" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-name">Full Name</label>
				                        	<input type="text" name="form-name" placeholder="Full name..." class="form-name form-control" id="form-name" required>
				                        </div>				                        
                                                        <div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" required>
				                        </div>
                                                        <div class="form-group">
				                        	<label class="sr-only" for="form-password-1">Password</label>
				                        	<input type="password" name="form-password-1" placeholder="Password..." class="form-password form-control" id="form-password-1" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password-2">Confirm Password</label>
				                        	<input type="password" name="form-password-2" placeholder="Confirm Password..." class="form-password form-control" id="form-password-2" required oninput="check(this)">
                                                                <script language='javascript' type='text/javascript'>
                                                                    function check(input) {
                                                                        if (input.value != document.getElementById('form-password-1').value) {
                                                                            input.setCustomValidity('Password Must be Matching.');
                                                                        } else {
                                                                            // input is valid -- reset the error message
                                                                            input.setCustomValidity('');
                                                                        }
                                                                    }
                                                                </script>
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--</div>-->

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p> Thanks for registering with us! <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="../../assets/login/js/jquery-1.11.1.min.js"></script>
        <script src="../../assets/login/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    </body>

</html>
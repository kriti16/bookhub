 <?php 
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$name = ($this->session->userdata['logged_in']['name']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $authorinfo[0]['name']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

          <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png">
  

    <!-- SCRIPT 
    ============================================================-->  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>

<body>


  <!--HEADER ROW-->
  <div id="header-row">
    <div class="container">
      <div class="row">
              <!--LOGO-->
              <div class="span3"><a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"/></a></div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
              <div class="span9 ">
                <div class="navbar ">
                  <div class="navbar-inner ">
                    <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                    <div class="nav-collapse collapse navbar-responsive-collapse ">
                    <ul class="nav">
                        <!-- <li class="active"><a href="index.html">Home</a></li> -->
                        <?php 
                        if (isset($this->session->userdata['logged_in'])){
                            echo '<li><a href="'.base_url().'index.php/home/user_books/'.$username.'">My Books</a></li>';
                        }
                        else{
                            echo '<li><a href="'.base_url().'index.php/home/login">My Books</a></li>';
                        }
                        ?>
                        <li class="dropdown">
                          <a href="about.html" class="dropdown-toggle" data-toggle="dropdown">Browse <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Art">Art</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Crime">Crime</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Classics">Classics</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Comedy">Comedy</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Fantasy">Fantasy</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Fiction">Fiction</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/History">History</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Horror">Horror</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Mystery">Mystery</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Non-Fiction">Non-Fiction</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Sci_Fi">Sci-Fi</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/genre/Thriller">Thriller</a></li>
                            </ul>

                        </li>
                        
                        <li>
                            <form class="navbar-form" role="search" method="post" 
                            action="<?php echo base_url().'index.php/home/book_info_name';?>" >
                                <div class="input-group add-on">
                                  <input class="form-control" placeholder="Search books" name="srch-term" id="srch-term" type="text">
                              
                                    <button class="btn btn-small" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                  
                               </div>
                            </form>
                        </li>
<!--<li>
                        <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search books" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
</li>-->
                        <?php 
                        if (!isset($this->session->userdata['logged_in'])){
                        echo '<li><a href="'.base_url().'index.php/home/login">Login</a></li>'.
                        '<li><a href="'.base_url().'index.php/home/signup">Signup</a></li>';
                        }
                        else{
                            echo '<li><a href="'.base_url().'index.php/user_auth/logout">Logout</a></li>';
                        }
                        ?>
                 
                    </ul>
  
                  </div>
                        
                  </div>
                </div>
              </div>
            <!-- MAIN NAVIGATION -->  
      </div>
    </div>
  </div>
  <!-- /HEADER ROW -->






<div class="container">

  <!--PAGE TITLE-->

	<div class="row">
		<div class="span12">
		<div class="page-header">

				<h1>
				<?php echo $authorinfo[0]['name']; ?>
			</h1>
		</div>

		</div>
	</div>

  <!-- /. PAGE TITLE-->
  	<div class="row">
	  <div class="span12">
	  <!--<h2>Welcome to Fornax</h2>-->
          <ul class="row" style="list-style-type:none">
                    <li class="thumbnail span3">
			<img alt="" src="<?php echo base_url().$authorinfo[0]['coverimagepath'];?>" height="150" width="226" />
                        <div class="caption">    
                        <p>Birth Place :<?php echo $authorinfo[0]['birth_place'];?></p>
                            <p>Birth Date :<?php echo $authorinfo[0]['birth_date'];?></p>
                        </div>
                    </li>
                    <li class="span9">
			<p><?php echo $authorinfo[0]['intro'];?>
                        </p>
                    </li>
          </ul>
	  </div>
	 </div>

	 <div class="hr-divider"></div>

	<div class="row">
		<div class="span12">

		<h2><?php echo $authorinfo[0]['name']?>'s Books:</h2>
			<ul class="thumbnails vdivide">
        <?php foreach ($authorbooks as $book): ?>
				<li class="span3">
					<div class="row feature-box">
						<img alt="" src="<?php echo base_url().$book['coverimagepath']; ?>" height="150" width="200"/>
						<div class="caption text-center">
                                                    <p></p>
                                                        <p style="font-size: 20px">
							<a href="<?php echo base_url().'index.php/home/book_info/'.$book['isbn'];?>"><?php echo $book['title'];?></a>
                                                        </p>
                                                        <p>
							</p>
						</div>
					</div>
				</li>
        <?php endforeach; ?>				
			</ul>
		</div>
	</div>

</div>


<!--Footer
==========================-->

<footer>
    <div class="container">
      <div class="row">
        <div class="span6">Copyright &copy 2013 Shapebootstrap | All Rights Reserved  <br>
        <small>Aliquam tincidunt mauris eu risus.</small>
        </div>
        <div class="span6">
            <div class="social pull-right">
                <a href="#"><img src="<?php echo base_url();?>assets/img/social/googleplus.png" alt=""></a>
                <a href="#"><img src="<?php echo base_url();?>assets/img/social/dribbble.png" alt=""></a>
                <a href="#"><img src="<?php echo base_url();?>assets/img/social/twitter.png" alt=""></a>
                <a href="#"><img src="<?php echo base_url();?>assets/img/social/dribbble.png" alt=""></a>
                <a href="#"><img src="<?php echo base_url();?>assets/img/social/rss.png" alt=""></a>
            </div>
        </div>
      </div>
    </div>
</footer>

<!--/.Footer-->

</body>
</html>

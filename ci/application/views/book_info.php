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
  <title><?php echo $bookinfo[0]['title']; ?></title>
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
				<?php echo $bookinfo[0]['title']; ?>
			</h1>
		</div>

		</div>
	</div>

  <!-- /. PAGE TITLE-->
  	<div class="row">
	  <div class="span12">
	  <!--<h2>Welcome to Fornax</h2>-->
          <ul class="row" style="list-style-type:none" >
                    <li class="thumbnail span3 text-center">
			<img alt="" src="<?php echo base_url().$bookinfo[0]['coverimagepath'];?>" height="100" width="150"/>
                     <div class="caption">
                    
                    <p>
                       Overall Rating: <strong><?php echo $avgrating[0]['avgrating'];?></strong>
                    </p>
                   
                    <p>
                        Number of pages :<?php echo $bookinfo[0]['numpages'];?>
                    </p>
                    
                    <p>
                        Author: <a href="<?php echo base_url();?>index.php/home/author_info/<?php echo $bookinfo[0]['author'];?>"><?php echo $bookinfo[0]['author'];?>
                        </a>
                    </p>
                    </div>
                    </li>
                    <li class="span9" style="font-family: verdana">
                        <?php 
                        if (isset($this->session->userdata['logged_in'])):
                    ?>
                    <div class="dropdown">
                          Status :<a class="dropdown-toggle" data-toggle="dropdown"> <?php echo $status[0]['read_status']?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>index.php/home/set_status/<?php echo $bookinfo[0]['isbn']?>/want_to_read">Want to read</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/set_status/<?php echo $bookinfo[0]['isbn']?>/prev_read">Read</a></li>
                                  <li><a href="<?php echo base_url();?>index.php/home/set_status/<?php echo $bookinfo[0]['isbn']?>/curr_read">Currently Reading</a></li>
                            </ul>
                    </div>   
                    <?php endif;?>
                        <p> </p>
                         <?php 
                        if (isset($this->session->userdata['logged_in'])):
                    ?>
                    <div class="dropdown">
                          My Rating :<a class="dropdown-toggle" data-toggle="dropdown"> <?php echo $rating[0]['rating']?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/0">0</a></li>
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/1">1</a></li>
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/2">2</a></li>
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/3">3</a></li>
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/4">4</a></li>
                                <li><a href="<?php echo base_url();?>index.php/home/set_rating/<?php echo $bookinfo[0]['isbn']?>/5">5</a></li>
                            </ul>
                    </div>   
                    <?php endif;?> 
                        <p> </p>
			<p>
			<?php echo $bookinfo[0]['intro'];?>
                    </p>
                    
                    </li>
          </ul>
	  </div>
	 </div>

	 <div class="hr-divider"></div>

<!-- 	<div class="row">
		<div class="span12">

		<h2>Our Team</h2>
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<img alt="" src="img/team1.jpg" />
						<div class="caption">
							<strong>DERRICK JEFFERSON</strong> / 
							UI DESIGNER
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>

							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="img/team2.jpg" />
						<div class="caption">
							<strong>ENJAMIN GARRETT</strong> / 
							MARKETING
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="img/team3.jpg" />
						<div class="caption">
							<strong>DASIA KATELYN</strong> / 
							IOS DEVELOPER
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div> -->

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

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
                          <a href="" class="dropdown-toggle" data-toggle="dropdown">Browse <b class="caret"></b></a>
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
</li>-->                <?php 
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

  <!--Carousel
  ==================================================-->

  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">

      <div class="active item">
        <div class="container">
          <div class="row">
            
              <div class="span6">

                <div class="carousel-caption">
                      <h1>Your perfect reading companion</h1>
                      <p class="lead"> “A reader lives a thousand lives before he dies, said Jojen. The man who never reads lives only one.”
                                    ― George R.R. Martin<br>
                       Go ahead with your reading habit by finding the best books out there, while also keeping track of all the awesome books you read. </p>
                       <?php 
                        if (!isset($this->session->userdata['logged_in'])){
                            echo '<a class="btn btn-large btn-primary" href="'.base_url().'index.php/home/signup">Sign up today</a>';
                            
                        }
                        ?>
                </div>

              </div>

                <div class="span6"> <img src="<?php echo base_url();?>assets/img/slide/slide1.jpg"></div>

          </div>
        </div>
       



      </div>

      <div class="item">
       
        <div class="container">
          <div class="row">
            
              <div class="span6">

                <div class="carousel-caption">
                      <h1>Manage your books online</h1>
                      <p class="lead">Keep a log of all your favorite books, the ones which you
                      read long back and the ones you look forward to read. A whole world of books is waiting for you. </p>
                      
                      <?php 
                        if (!isset($this->session->userdata['logged_in'])){
                            echo '<a class="btn btn-large btn-primary" href="'.base_url().'index.php/home/login">Login</a>';
                            
                        }
                        ?>
                </div>

              </div>

                <div class="span6"> <img src="<?php echo base_url();?>assets/img/slide/slide2.jpg"></div>

          </div>
        </div>

      </div>





    </div>
       <!-- Carousel nav -->
      <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
        <!-- /.Carousel nav -->

  </div>
    <!-- /Carousel -->



<!-- Feature 
  ==============================================-->


  <div class="row feature-box">
      <div class="span12 cnt-title">
       <h1>Trending Right Now!</h1> 
        <span>Unable to choose a book to read? Pick one from the books trending this week.</span>        
      </div>

      <div class="span4">
        <a href="<?php echo base_url();?>index.php/home/book_info/62409859"><img src="<?php echo base_url();?>assets/img/1.jpg"></a>
        <!--<h2>Feature A</h2>-->
        <p>
            Book description comes here
        </p>

        <a href="<?php echo base_url().'index.php/home/book_info/62409859';?>">View Book&rarr;</a>

      </div>

      <div class="span4">
        <a href="#"><img src="<?php echo base_url();?>assets/img/2.jpg"></a>
        <!--<h2>Feature B</h2>-->
        <p>
            Book description comes here
        </p>   
          <a href="<?php echo base_url().'index.php/home/book_info/316206849';?>">View Book &rarr;</a>    
      </div>

      <div class="span4">
        <a href="#"><img src="<?php echo base_url();?>assets/img/3.jpg"></a>
        <!--<h2>Feature C</h2>-->
        <p>
            Book description comes here 
        </p>
          <a href="<?php echo base_url().'index.php/home/book_info/2247410';?>">View Book &rarr;</a>
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

<?php
include ('../Inc.php');
$obj = new admin;
 if(isset($_GET['id']))
             {
                $id = $_GET['id'];
                $cond = "id='".$id."'";
                $query = $obj->select('productstable',$cond);
                $row = $obj->fetch($query);
                //$q = $row['name'];
                ///echo $row;die();
              }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Entrada</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel="stylesheet" href="css/imagehover.css">
<link rel="stylesheet" href="css/animate.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar2 navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
      <div class="col-md-2">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
          <a class="navbar-brand" href="#"><img src="images/logo-1-1.png" class="img-logo"></a> </div>
      </div>
      <div class="col-md-10"> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
             <li> <a href="index.html" class="dropdown-toggle" >HOME<span class="caret"></span></a>
              
            </li>
           
           <li> <a href="grid.html" class="dropdown-toggle" >SHOP<span class="caret"></span></a>
             
            </li>
            
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li role="separator" class="divider1"></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li role="separator" class="divider1"></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            
             <li> <a href="contact.html" class="dropdown-toggle" >CONTACT<span class="caret"></span></a> </li>
           
            
            
            <li> <a href="login.html" class="dropdown-toggle" >lOG-IN<span class="caret"></span></a> </li>
             <li> <a href="register.html" class="dropdown-toggle" >REGISTER<span class="caret"></span></a> </li>
             
           
          </ul>
          <!--nav bar dropdowns--> 
        </div>
        <!-- /.navbar-collapse --> 
      </div>
    </div>
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Carousel
    ================================================== -->
<!-- /.carousel --> 
  <!--bottom nav-->
  
<!--end bottom nav--> 
<!-- /.carousel -->
<section class="detail-head">
  <div class="container-fluid no-margin">
   <div class="row ">
   
  <div class="detail-head-left"><div class="col-md-6 col-sm-12 "><img src="http://localhost/admin/imagesproducts/<?php echo $row['file']; ?>" style="background: none;" ></div></div>
  <div class="detail-head-right"><div class="col-md-6 col-sm-12 "><div class="detail-head-info"><div class="detail-head-topic"><h2><b><?php echo $row['name']; ?></b></h2></div><br>
<div class="">
	  <p class="price-detail">US$ <?php echo $row['price']; ?></p>
	  <ul class="tick">
	  <li><?php echo $row['description'];?></li>
		
	   </ul><br>
	   <p><a class="btn1 btn-primary" href="#" role="button" >ADD TO CART</a></p>
	   </div>
	   </div></div></div>
 
   </div>
  </div>
</section>
<section class="panel-cost">
	
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                       <div class="container">
                        <ul class="nav nav-tabs">
                           
                            <li class="active"><a href="#tab1default" data-toggle="tab">Overview</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Specification</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Accomodation</a></li>
                            <li><a href="#tab4default" data-toggle="tab">Enquire Now</a></li>
                            <li><a href="#tab5default" data-toggle="tab">Gallery</a></li>
                            
                        </ul>
                        </div>
                </div>
                <div class="container">
                <div class="row">
                	<div class="col-md-8 col-sm-8 col-xs-12">
                		                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        <div class="def1">
                        	<div class="">
                        		<div class=""><div class="def1-wrapper-left">
                        		<h3><b>Overview</b></h3><br>
                        			This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.<br>

Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.<br>

Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.<br>

Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.<br>

Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.<br>

Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.<br>

Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

Suspendisse gin orci enim.
                       		
                        		</div></div>
                        		<div class=""></div>
                        	</div>
                        	
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tab2default"><div class="container"><div class="def1-wrapper-left"><h3><b>SPECIFICATION</b></h3>
29 Mar	16 Apr	04 May	Arrive Kathmandu 1317m<br>
30	17	05	Kathmandu<br>
31	18	06	Kathmandu – Lukla 2840m – Phakding 2610m<br>
01 Apr	19	07	Phakding – Namche Bazar 3440m<br>
02	20	08	Namche Bazar – Khumjung 3780m<br>
03	21	09	Khumjung<br>
04	22	10	Khumjung – Phortse 3810m<br>
05	23	11	Phortse – Pheriche 4240m<br>
06	24	12	Pheriche<br>
07	25	13	Pheriche – Lobuche BC 4910m<br>
08	26	14	Lobuche BC<br>
09	27	15	Lobuche BC – Everest BC 5267m<br>
10	28	16	Everest BC<br>
11	29	17	Everest BC<br>
12	30	18	Everest BC<br>
13	01 May	19	Everest BC – Lobuche BC<br>
14	02	20	Lobuche BC – Pangboche 3930m<br>
15	03	21	Pangboche – Namche Bazar<br>
16	04	22	Namche Bazar - Lukla<br>
17	05	23	Lukla - Kathmandu<br>
18	06	24	Kathmandu<br>
19	07	25	Depart Kathmandu</div></div></div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">
                        <h3><b>ENQUIRE NOW</b></h3><br>
                        <!--form-->
                        <div class="enquire-wrapper">
                        	<form class="form-inline margin-top" action="#">
    <div class="form-group" >
				<div class="row mar-bottom">
					<div class="col-md-6"><input type="email" class="form-control" id="fname" placeholder="FIRST NAME"></div>
					<div class="col-md-6"><input type="password" class="form-control" id="lname" placeholder="LAST NAME"></div>
				</div>
				 <div class="row mar-bottom">
					<div class="col-md-6"><input type="email" class="form-control" id="email" placeholder="E-MAIL"></div>
					<div class="col-md-6"><input type="password" class="form-control" id="phnum" placeholder="PHONE NUMBER"></div>
				</div>
				<div class="row mar-bottom">
					<div class="col-md-6">	
           <div class="contentbox ">
            <select  name="month" class="size-box" >
              <option value="" class="center-text " >
              <center>
                Month
              </center>
              </option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
          </div>
					<div class="col-md-6">
							<div class="contentbox">
            <select  name="month" class="size-box" >
              <option value="" class="center-text">
              <center>
                Month
              </center>
              </option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
					</div>
				</div>
			
				 <div class="row">
				 	<div class="col-md-12">
				 		<textarea class="form-control" rows="5" id="comment" placeholder="YOUR MESSAGE"></textarea>
				 	</div>
				 </div>
				 <center><p><a class="btn btn-lg btn-primary mar-top-20px" href="#" role="button">SEND ENQUIRY</a></p></center>
					 </div>
				</form>
                      </div>
                        <!--end form-->
                        </div>
                        <div class="tab-pane fade" id="tab5default">
                        <h3><b>GALLERY</b></h3>
                        <section>
	<div class="gallery-wrapper">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-35-550x358.jpg" class="img-responsive"></div></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/itinerary-03-170x165.jpg" class="img-responsive"></div></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/image-bg-1.jpg" class="img-responsive"></div></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/img-01-170x165.jpg" class="img-responsive"></div></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-13-min-550x358.jpg" class="img-responsive"></div></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-24-min-550x358.jpg" class="img-responsive"></div></div>
		</div>
	</div>
</section>
                        </div>
                    </div>
                </div>

                	</div>
                	<div class="col-md-4 col-sm-4 col-xs-12">
                		<div class="panel-body-right">
                			<div class="def1-wrapper-right">
                        			<center><h3><b>Related Products</b></h3></center>
                        			<!--content-->
<div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
            <h4>EVEREST BASE CAMP</h4>
            </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
            <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity
           
           <br>
           <hr>
            <div class="social-media">
              <p class="social-media-left"><b>£429</b></p>
              <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
            </div>
          </div>
                       				<!--end content-->
                       				<!--content-->
<div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
            <h4>EVEREST BASE CAMP</h4>
            </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
            <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity
           
           <br>
            <hr>
            <div class="social-media">
              <p class="social-media-left"><b>£429</b></p>
              <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
            </div>
          </div>
                       				<!--end content-->
                       				<!--content-->
<div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
            <h4>EVEREST BASE CAMP</h4>
            </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
            <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity
           
           <br>
          <hr>
            <div class="social-media">
              <p class="social-media-left"><b>£429</b></p>
              <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
            </div>
          </div>
                       				<!--end content-->
                        		</div>
                		</div>
                		
                	</div>
                </div>
                </div>
                
            </div>
    
</section>

<!--special discount box-->

<!--footer-->
<section class="cmt">
  <div class="container-fluid">
    <div class="row bg ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class=" font-good">
          <section class="latest-blog-large">
	<div class="container-fluid bg-gray">
		<div class="row ">
			<div class="col-lg-12">
				<center><h3>Comment</h3></center>
				
				<!--form-->
				<center>
				 <form class="form-inline margin-top" action="#">
    <div class="form-group" >
				
				
				 <div class="row">
				 	<div class="col-md-12">
				 		<textarea class="form-control" rows="5" id="comment1" placeholder="YOUR COMMENT"></textarea>
				 	</div>
				 </div>
				 <p><a class="btn btn-lg btn-primary mar-top-20px" href="#" role="button">Comment</a></p>
					 </div>
				</form>
			</center>
			
				<!--end form-->
			</div>
			
		</div>
	</div>
</section>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!--footer starts-->

<footer class="container-fluid foot">
  <div class="row">
    <div class="container">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix"><img src="images/logo-1-1.png" class="img-fluid" style="width:125px; margin-top: 25px;" ></div>
        <br>
        <div class="clearfix text-white2"> This is Photoshop's version  of Lorem Ipsn gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auci elit.</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>LATEST NEWS</h3>
        </div>
        <br>
        <div class="clearfix text-white2"> Water & Rocks: Discovering the Beauty of New Zealand
          05.4.2016
          Updates: People Who Work Overseas and Fly For Free
          05.4.2016</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>FOLLOW US</h3>
        </div>
        <br>
        <div class="clearfix text-white2">
          <p>Wellspring - A Health & Lifestyle Theme: https://t.co/PjWoihwZsd
            Need an SEO theme for Wordpress? Try Optimize: https://t.co/67YGlbWtUw
            Deploy, a modern WP theme for business: https://t.co/wus9OHn9SB</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="clearfix text-white">
          <h3>INSTAGRAM FEED</h3>
        </div>
        <br>
        <div class="clearfix text-white"></div>
      </div>
    </div>
  </div>
</footer>
<section class="container-fluid"><!--lower footer-->
  
  <div class=" row bg2">
    <center>
      <h3 class="text-white" style="font-size: 14px;">@2016. Mikado - All Rights Reserved</h3>
    </center>
  </div>
</section>

<!--end guides-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 

<!-- Just to make our placeholder images work. Don't actually copy the next line! --> 
<script>
	$(window).on("scroll", function () {
			if ($(window).width() >= 992) {  
				if ($(window).scrollTop() > 290) {
					$(".navbar2").css({"position":"fixed"});
					$(".navbar2").css({"background":"#252525"});
					$(".detail-head").css({"padding-top":"105px"});
					$(".navbar2").addClass("animated fadeInDownBig ");
				} else if ($(window).scrollTop() < 100) {
					$(".navbar2").removeClass("animated fadeInDownBig ");
					$(".navbar2").css({"background":"black","position":"relative"});
					$(".detail-head").css({"padding-top":"0px"});
				}
			}
			}); //end of scroll method

	</script>
	<script>
	$('#carouselHacked').carousel();
	</script>
	<script>
	$(document).ready(function() {
    $('#navbar').affix({
        offset: {
			top: $('header').height()
		}
	});	
});
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(document).ready(function(){
	if ($(window).width() >= 992) {
    $('.panel-cost ul li a').on('click', function(){
        $('html,body').animate({scrollTop: 600}, 800);
    }); 
	}else 
	 $('.panel-cost ul li a').on('click', function(){
        $('html,body').animate({scrollTop: none});
    });
});  

</script>
<script>
	$(document).ready(function () {
		
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		
			
			
		});
		
	</script>
	
	
	
	
</body>
</html>

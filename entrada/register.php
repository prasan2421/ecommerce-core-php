
<?php
include ('Inc.php');
$obj = new test;

?>
<html>
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
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</head>
<body>


<!-- Carousel
    ================================================== -->

<!--end bottom nav--> 
<!-- /.carousel -->
<section class="mar-top-50px">
  <div class="container">
    <div class="row">
      <center>
        <h1>REGISTER</h1>
        <span class="paragraph-size-18px "><br>
        
        </span>
      </center>
    </div>
    <hr>
    
    <hr>
   

  </div>
</section>
 <section class="latest-blog-large">
	<div class="container-fluid bg-gray">
		<div class="row ">
			<div class="col-lg-12">
				
				
				<!--form-->
				<center>
				 <form class="form-inline margin-top" method="POST" action="">
    <div class="form-group" >
				<div class="row mar-bottom">
					<div class="col-md-6"><input type="text" class="form-control" name="name" placeholder="NAME"></div>
					<div class="col-md-6"><input type="email" class="form-control" name="email" placeholder="EMAIL"></div>
					
				</div>
				<div class="row mar-bottom">

					<div class="col-md-6"><input type="number" class="form-control" name="phone" placeholder="PH NUMBER"></div>
					<div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="PASSWORD"></div>

				</div>



		<input type="submit" name="submit" value="Register"  class="btn btn-lg btn-primary mar-top-20px">
		<p><a href="login.php" class="btn btn-lg btn-primary mar-top-20px" name="register">Login</a></p>
					 </div>
				</form>
					<?php
					if(isset($_POST['submit']))
					{
						$arr['name']=$_POST['name'];

						$arr['email']=$_POST['email'];
						$arr['phone']=$_POST['phone'];
						$arr['password']=sha1($_POST['password']);
						$q = $obj->insert('phptesttable', $arr);

						$r = $obj->execute($q);
						if($r)
						{
							session_start();
							$_SESSION['name'] = $arr['name'];
//        var_dump( $_SESSION['user_id']);die();
							$obj->redirect('login.php');
						}
						else{
							echo 'Invalid';
						}

					}
					?>
			
				<!--end form-->
			</div>
			
		</div>
	</div>
</section>

<!--special discount box-->

<!--end special discount box--> 


<!--footer-->


<!--footer starts-->




<!--end guides-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5KR40RrKJCx1W3iP37RL1PnrhXk1HAL0&callback=myMap"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 

<!-- Just to make our placeholder images work. Don't actually copy the next line! --> 
	
	
</body>
</html>

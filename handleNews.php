<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Contact :: w3layouts</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html">Learner</a></h1>
		</div>
		<div class="h_search navbar-right">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.php">Home</a></li>
		        <li><a href="technology.php">Technologies</a></li>
		        <li><a href="about.php">About</a></li>
		        <li><a href="blog.php">Blog</a></li>
		        <li class="active"><a href="contact.php">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>New event</h2>
					    <?php
							static $id = 0;
							if (isset($_POST['submit'])) {
								echo $_POST["eventTopic"];
								echo '<br> <br>';
								
								$check = getimagesize($_FILES["eventImg"]["tmp_name"]);
								$sImage;
								if($check !== false) {
									$aExtraInfo = getimagesize($_FILES['eventImg']['tmp_name']);
									$sImage = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['eventImg']['tmp_name']));
									echo '<img src="' . $sImage . '" alt="Your Image" height = "500" width = "500" />';
									$uploadOk = 1;
									
									
									//imagejpeg ($sImage , "images/blog_images/img_.jpg" );
									$topic = $_POST["eventTopic"];
									$content = $_POST["userMsg"];
									$img_dir = "images/blog_images/img_".$topic.".jpg";
									move_uploaded_file($_FILES["eventImg"]["tmp_name"],$img_dir );
									
									$jsonFile = file_get_contents('blogData.json');
									$data = json_decode($jsonFile, true);
									$data[] = array_push($data,array('topic'=>$topic, 'content'=>$content, 'img'=>$img_dir));
									
									file_put_contents('blogData.json', json_encode($data));
									
								} else {
									echo "File is not an image.";
									$uploadOk = 0;
								}
								echo '<br><br>'.$_POST["userMsg"];
								
								
							};
							
							
						?>
				    </div>
					<div class="contact-form">
						<form action="index.php" method="post">
							<div>
						   		<label class="fa-btn btn-1 btn-1e">
								<input type="submit" value="OK" name="submit"></label>
						  </div>
						</form>
					</div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
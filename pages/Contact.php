<?php include 'Mail.php';?>

<!DOCTYPE html>
<html>
<head>
<title>Divya Enterprises - Events organized suppliers</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!--
<script src="../js/contact.js"></script>

-->
<!-- Custom Theme files -->
<!--theme-style-->
<style>
.error {color: #FF0000;}
</style>
<style>
.success {color: #3A9625;}
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scientist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
<div class="header header-top">
	<div class="container">
		<div class="logo">
		<h1><a>
		Divya Enterprises
		</a></h1>
		</div>
		<div class="top-nav">
			<span class="menu"><img src="../images/menu.png" alt=""> </span>
				<ul>
					<li><a href="../Home.html" class="hvr-sweep-to-bottom">Home</a></li>
					<li><a href="We_do.html" class="hvr-sweep-to-bottom">We Do</a></li>
					<li><a href="About_us.html" class="hvr-sweep-to-bottom ">About Us</a></li>
					<li><a href="Gallery.html" class="hvr-sweep-to-bottom ">Gallery</a></li>
					<li class="active"><a href="Contact.php" class="hvr-sweep-to-bottom">Contact Us</a></li>
				</ul>
				<div class="clearfix"> </div>
						<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
				</script>				
		</div>
		<div class="clearfix"> </div>
	</div>
<!---->
</div>
<!--contact-->
<div class="container">
				<div class="contact">
					<div class="contact-top">
						<h2>Contact Us</h2>
					</div>	
					<div class="map">
				<!--	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0975067521963!2d80.26167081435425!3d13.02946231713241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267ce6be1093d%3A0xd8f4b5799727d815!2sDivya+Enterprises!5e0!3m2!1sen!2sin!4v1461230008929" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			 -->
			 </div>
			 <div class="contact-bottom" >

				 <form id="form" method="post" action="Contact.php">
				 
				<div>
							<input id="name" type="text" name="name" placeholder="Name" style="display: inline-block;">	
							<p class="error" style="display: inline-block;"> <?php echo $nameErr;?></p>
				</div>	
				
				<div>
					<input id="email" type="text" name="email" placeholder="Email Address" style="display: inline-block;">	
					<p class="error" style="display: inline-block;"> <?php echo $emailErr;?></p>
					
				</div>
					
				<div>	
				
					<input id="contact" type="text" name="contact" placeholder="Phone Number" style="display: inline-block;">
					<p class="error" style="display: inline-block;"> <?php echo $contactErr;?></p>
					
				</div>
				
				<div>
				
					<textarea id="message" name="message" placeholder="Message" style="display: inline-block;"></textarea>
					<p class="error" style="display: inline-block;"> <?php echo $messageErr;?></p>
					
				</div>	
					
					<input class="submit" type="submit" name="submit" value="Submit">
					
					<span class="success"> <?php echo $successMessage;?> </span>
					
				
				</form>	
			</div>			
		</div>
			</div>

<!--address-->

	<div class="address">
		<div class="container">
			<div class=" address-more">
				<h3>Address</h3>
				<div class="col-md-4 address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="address1">
						<p>No 56, St Marys Road,</p><p>Mandaveli,</p>
						<p>Chennai-600 028</p>
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 address-grid ">
					<i class="glyphicon glyphicon-phone"></i>
						<div class="address1">
							<p>9840343065</p>
							<p>9840157755</p>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-5 address-grid ">
					<i class="glyphicon glyphicon-envelope"></i>
						<div class="address1">
							<p><a href="mailto:@example.com">divyaenterprises.n@gmail.com</a></p>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//address-->
	
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-top">
			<h3><a href="#">Divya Enterprises</a></h3>
		</div>
		<div class="col-md-4 footer-top1">
			<ul class="social">
				<li><a href="#"><i> </i></a></li>
            	<li><a href="#"><i class="tweet"> </i></a></li>
            	<li><a href="#"><i class="in"> </i></a></li>
            	<li><a href="#"><i class="utube"> </i></a></li>
			</ul>
		</div>
		<div class="col-md-4 footer-top2">
			<p >© 2016 Divya Enterprises. All rights reserved | Developed by <a>COAX  & TEAM</a> </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</body>
</html>
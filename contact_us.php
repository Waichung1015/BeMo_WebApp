<?php
$con = mysqli_connect('127.0.0.1:3306','root','','cda_db') or die('Unable To connect');
if(isset($_POST['submit']))
{
    $sql = "INSERT INTO contact (name,email,help_message)
    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";
    $result = mysqli_query($con,$sql);
  echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
?>
<!doctype html>
<head><meta charset=utf-8">
<meta name="rebots" content="noindex"><!--robots applies to all engines and prevent page from being indexed-->
<meta name="viewport" content="initial-scale=1 maximum-scale=1"/><!--render your page on mobile device-->
<meta name="description" content="log in to view CDA interview " />
<title>Log in and learn more about CDA interview</title>
<!-- Start Google Analytics --><!--track the visitors of the websites, the search keys on the site and time span in the size-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-163047710-1', 'auto');
ga('send', 'pageview');

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '672718936796276');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=672718936796276&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- End Google Analytics -->


<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes_Endeavor/style.css" />
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="rw_common/themes/Endeavor/scripts/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<nav class="navbar navbar-expand-sm bg-light navbarblack">
<img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo"/>
<ul class="navbar-nav mx-auto">
<li class="nav-item">
<a class="nav-link" href="contact_us.php" ><i class="fa fa-edit"style="font-size:30px;color:black;padding-right:5px;"></i>Contact Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="main.php"><i class="fa fa-sign-in" style="font-size:30px;color:black;padding-right: 10px;padding-left:150px;"></i>Log in</a>
</li>
</ul>
</nav>


<body>
	<form method="post" action="contact_us.php" align="center">
  <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card_one">
			<div class="card-header">
	<h3 align="center">Contact Us</h3>
</div>
	<div class="card-body">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-user"></i></span>
			</div>
	<input type="input" class="form-control" name="name" placeholder="Full Name" required>
</div>
<div class="input-group form-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-envelope"></i></span>
	</div>
<input type="input" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="input-group form-group">
<textarea name="message" placeholder="Message" required></textarea>
</div>
<div class="form-group">
	<input type="submit" name="submit" value="Submit" class="btn justify-content-center submit_btn">
</div>
</form>
</body>
<div class="footer">
  &copy;2013-2016 BeMo Academic Consulting Inc. All rights reserved.<a href="http://www.cdainterview.com/disclaimer-privacy-policy.html"target="_blank"><span style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a><a href="contact_us.php" id="rw_email_contact"><span style="text-decoration:underline;padding-left:10px">Contact Us</span></a><a href="https://www.facebook.com/bemoacademicconsulting" class="fa fa-facebook" style="color:white; padding-left: 350px;"></a><a href="https://twitter.com/BeMo_AC" class="fa fa-twitter" style="color:white;padding-left:30px"></a>
</div>

<?php
$message ="";
if(count($_POST)>0){
	$url = parse_url(getenv("mysql://bdcfb3a5a84835:b940be04@us-cdbr-iron-east-01.cleardb.net/heroku_92ff807af41df11?reconnect=true"));
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  $con = new mysqli($server, $username, $password, $db) or die('Unable To connect');
	
	$result = mysqli_query($con,"SELECT * FROM user_info WHERE user_name='" . $_POST["user_name"] . "' and user_password = '". $_POST["user_password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		  $_SESSION["name"] = $row['user_name'];
			$_SESSION["password"] = $row['user_password'];

	} else {
		$message = "Invalid Username or Password!";
	}
}
?>
<!doctype html>
<head><meta charset=utf-8">
<meta name="rebots" content="noindex"><!--robots applies to all engines and prevent page from being indexed-->
<meta name="viewport" content="initial-scale=1 maximum-scale=1"/><!--render your page on mobile device-->
<meta name="description" content="log in to view CDA interview " />
<title>Log in and learn more about CDA interview</title>
<!--track the visitors of the websites, the search keys on the site and time span in the size-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163144619-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163144619-1');
</script>
<!-- End Google Analytics -->

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



<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes_Endeavor/style.css" />
<style type="text/css" media="all">#feature {background-image: url(https://cdainterview.com/resources/cda-interview-guide.jpg);}</style><!--background image-->
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
<a class="nav-link" href="main.php" ><i class="fa fa-sign-in"style="font-size:30px;color:black;padding-right:5px;"></i>Log in</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact_us.php"><i class="fa fa-edit" style="font-size:30px;color:black;padding-left:200px;"></i>Contact Us</a>
</li>
</ul>
</nav>

<body>
	<form name="frmUser" method="post" action="https://cdainterview.com/" align="center">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
	<h3 align="center">Login</h3>
</div>
	<div class="card-body">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-user"></i></span>
			</div>

	<input type="text" class="form-control" placeholder="Enter Username" name="user_name" required>
</div>
<div class="input-group form-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-key"></i></span>
	</div>

<input type="password" class="form-control" placeholder="Enter Password" name="user_password" required>
</div>
<div class="form-group">
	<input type="submit" value="Login" class="btn justify-content-center login_btn">
</div>
</form>
</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">Don't have an account?<a href="main.php">Sign Up</a>
</div>
<div class="d-flex justify-content-center">
	<a href="main.php">Forgot your password?</a>
</div>
	</form>
</body>
<div class="footer">
  &copy;2013-2016 BeMo Academic Consulting Inc. All rights reserved.<a href="http://www.cdainterview.com/disclaimer-privacy-policy.html"target="_blank"><span style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a><a href="contact_us.php" id="rw_email_contact"><span style="text-decoration:underline;padding-left:10px">Contact Us</span></a><a href="https://www.facebook.com/bemoacademicconsulting" class="fa fa-facebook" style="color:white; padding-left: 350px;"></a><a href="https://twitter.com/BeMo_AC" class="fa fa-twitter" style="color:white;padding-left:30px"></a>
</div>

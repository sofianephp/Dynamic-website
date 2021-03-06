<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		<title>My website</title>
	</head>
	<body>
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="/"><img src="images/logo.png" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="chinese.php">Chinese Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="thai.php">Thai Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="european.php">European Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="healthy.php">Healthy Corner</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="kids.php">Kids Corner</a>
									</li>
									<li class="divider"></li>
									<li>
									<a href="drinks.php">Soft Drinks</a>
									</li>
								</ul><!-- end dropdown-menu -->
							</li>
						<li class="active">
								<a href="location.php">Location</a>
							</li>
								<li class="active">
								<a href="offers.php">Offers</a>
							</li>
								<li class="active">
								<a href="aboutus.php">About Us</a>
							</li>
								<li class="active">
								<a href="contactus.php">Contact us</a>
							</li>
							
						</ul>
						
						<form class="navbar-form pull-left">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form -->
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
										<a href="reg.php" ><span class="glyphicon glyphicon-user"></span> Sign out </a>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			
		

<form method="post" action="insert_post.php" enctype="multipart/form-data">
<table width="400" align="center" border="10">
<tr>
<td align="center" bgcolor="yellow" colspan="6"><h1>Insert New Post Here</h1></td>

</tr>
<tr>
<td align="right">Post Title:</td>
<td><input type="text" name="title" size="38"></td>
</tr>

<tr>
<td align="right">Post Author:</td>
<td><input type="text" name="author" size="38"></td>
</tr>

<tr>
<td align="right">Post Content:</td>
<td><textarea name="content" cols="30" rows="15"></textarea></td>
</tr>

<tr>

<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
</form>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

<?php

include("includes/connect.php");

if(isset($_POST['submit']))
{
	 $post_title = $_POST['title'];

	 $post_author = $_POST['author'];

	 $post_content = $_POST['content'];



	if($post_title =='' or 
	$post_content =='' or $post_author =='' )
	{
	echo "<script>alert('any of the field id empty')</script>";
	exit();
	}
	else{
	

	
	$insert_query = "insert into posts (post_title,post_author,
	post_content)  values ('$post_title',
	'$post_author','$post_content')";
	if(mysql_query($insert_query)){
	echo "<script>alert('post published successfuly'></script>";
	echo "<script>window.open('index.php','_self')</script>";
	}
}
}
?>

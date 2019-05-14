<html>
    <head>
        <title><?php echo $pageTitle;?></title>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css"> -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>
    <body>
        <div class="header">
            <div class="wrapper">
                <h1 class="branding-title"><a href="./">Personal Media Library</a></h1>
                <ul class="nav">
                    <li class="books<?php if($section == "books") {echo " on";}?>"><a href="catalog.php?cat=books">Books</a></li>
                    <li class="movies<?php if($section == "movies") {echo " on";}?>"><a href="catalog.php?cat=movies">Movies</a></li>
                    <li class="music<?php if($section == "music") {echo " on";}?>"><a href="catalog.php?cat=music">Music</a></li>
                    <li class="suggest<?php if($section == "suggest") {echo " on";}?>"><a href="suggest.php">Suggest</a></li>
                </ul>
            </div>
        </div>
         <div id="content">

         <!-- for responsive design -->
<!-- 
         <head>
	<title>Browse Jobs</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style>
  body{
   	background: url(img/bg.jpg); 
   	background-size: 100% 100%;
   	/* background-repeat: no-repeat; */
   	color: #ffffff;
	}
	.logo {
		width: 100px;
  	margin-right: 50px;
	 }
 </style>
<body>
  <!-- Nav Bar-->
	<!-- <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
	      <li>
					<a class="navbar-brand logo" href="index.php">
						<img class="logo" src="img/logo/myCVOnline_white.png" alt="company logo">
					</a>
				</li>
			</div>
		<div id="navbar" class="navbar-collapse collapse">
	    	<ul class="nav navbar-nav">
					<li><a href="jobs.php">Jobs</a></li>
						<?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1): ?>
					<li><a href="addjob.php">Add Job</a></li>
						<?php endif; ?>
						<?php if(isset($_SESSION['user_type'])&& $_SESSION['user_type']==1): ?>
					<li><a href="jobseekers.php">Job-Seekers</a></li>
						<?php endif; ?>
						<?php if(isset($_SESSION['user_type'])&& $_SESSION['user_type']==2): ?>
					<li><a href="buildresume.php">Build Resume</a></li>
						<?php endif; ?>
				</ul>
				<ul class="nav navbar-nav pull-right">
						<?php if(isset($_SESSION['user'])): ?>
					<li><a href="logout.php">Logout</a></li>
						<?php else : ?>
					<li><a href="signup.php">Signup</a></li>
					<li><a href="login.php">Login</a></li>
						<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>  -->
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Poly Blog Admin</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
        <div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Poly Blog Admin</a>
    		</div>
			<!-- <ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"> Logout</a></li>
					</ul>
				</li>
			</ul> -->

		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li class = "active"><a href = "home_admin.php">Home</a></li>
			<li><a href = "users_list.php">Users</a></li>
			<li><a href = "blog_admin.php">Blog</a></li>
			<li><a href = "event_admin.php">Event</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<center><img src = "images/back.jpg" width="1500px" heigh="1200px"/></center>
			</div>
		</div>
	</div>
	<br/>
	<br/>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>